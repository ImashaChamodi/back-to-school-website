<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../config.php';
include 'auth-check.php';
include 'admin-nav.php';

// Approve/Reject public donation requests
if(isset($_GET['approve'])) {
    $id = intval($_GET['approve']);
    $stmt = $conn->prepare("UPDATE donations SET status='approved' WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

if(isset($_GET['reject'])) {
    $id = intval($_GET['reject']);
    $stmt = $conn->prepare("UPDATE donations SET status='rejected' WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Delete donor profile
if(isset($_GET['delete_profile'])){
    $id = intval($_GET['delete_profile']);
    $stmt = $conn->prepare("DELETE FROM donor_profiles WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
}

// Add new donor profile (admin form)
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_profile'])){
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $imagePath = null;

    if(isset($_FILES['image']) && $_FILES['image']['error']===UPLOAD_ERR_OK){
        $uploadDir="../uploads/donors/";
        if(!is_dir($uploadDir)) mkdir($uploadDir,0777,true);
        $filename = time()."_".basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'],$uploadDir.$filename);
        $imagePath="uploads/donors/".$filename;
    }

    $stmt = $conn->prepare("INSERT INTO donor_profiles (name, description, image) VALUES (?,?,?)");
    $stmt->bind_param("sss",$name,$description,$imagePath);
    $stmt->execute();
    $stmt->close();
}

// Fetch pending public donation requests
$pendingRequests = $conn->query("SELECT * FROM donations WHERE status='pending' ORDER BY submitted_at DESC");

// Fetch approved donor profiles
$profiles = $conn->query("SELECT * FROM donor_profiles ORDER BY created_at DESC");
?>

<div class="container py-5">

    <!-- Pending Donation Requests -->
    <h2 class="mb-4">Pending Donation Requests</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover bg-white shadow-sm">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Donation Type</th>
                    <th>Amount / Resource</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php if($pendingRequests && $pendingRequests->num_rows>0){
                $i=1;
                while($p=$pendingRequests->fetch_assoc()){ ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= htmlspecialchars($p['full_name']) ?></td>
                        <td><?= htmlspecialchars($p['email']) ?></td>
                        <td><?= htmlspecialchars($p['phone']) ?></td>
                        <td><?= htmlspecialchars($p['donation_type']) ?></td>
                        <td>
                            <?= $p['donation_type']=='finance' ? '₹ '.$p['amount'] : htmlspecialchars($p['resource_details']) ?>
                        </td>
                        <td>
                            <a href="?approve=<?= $p['id'] ?>" class="btn btn-success btn-sm">Approve</a>
                            <a href="?reject=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Reject</a>
                        </td>
                    </tr>
            <?php }} else { ?>
                <tr><td colspan="7" class="text-center text-muted">No pending donation requests.</td></tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Add Donor Profile Form -->
    <hr class="my-5">
    <h2 class="mb-4">Add Donor Profile</h2>
    <form method="post" enctype="multipart/form-data" class="card p-4 shadow-sm mb-5">
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Image:</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>
        <button type="submit" name="add_profile" class="btn btn-primary">Add Donor</button>
    </form>

    <!-- Approved Donor Profiles -->
    <hr class="my-5">
    <h2 class="mb-4">Approved Donor Profiles</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover bg-white shadow-sm">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php if($profiles && $profiles->num_rows>0){
                $i=1;
                while($v = $profiles->fetch_assoc()){
                    $img = $v['image'] && file_exists("../".$v['image']) ? "../".$v['image'] : "../assets/no-image.png"; ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><img src="<?= $img ?>" style="width:60px;height:60px;object-fit:cover;border-radius:50%;"></td>
                        <td><?= htmlspecialchars($v['name']) ?></td>
                        <td><?= nl2br(htmlspecialchars($v['description'])) ?></td>
                        <td>
                            <a href="?delete_profile=<?= $v['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
            <?php }} else { ?>
                <tr><td colspan="5" class="text-center text-muted">No donor profiles added yet.</td></tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>
