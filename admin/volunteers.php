<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../config.php';
include 'auth-check.php';
include 'admin-nav.php';

// Approve or reject volunteer applications
if(isset($_GET['approve'])){
    $id=intval($_GET['approve']);
    $stmt=$conn->prepare("UPDATE volunteer_applications SET status='approved' WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
}

if(isset($_GET['reject'])){
    $id=intval($_GET['reject']);
    $stmt=$conn->prepare("UPDATE volunteer_applications SET status='rejected' WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
}

if(isset($_GET['delete_profile'])){
    $id=intval($_GET['delete_profile']);
    $stmt=$conn->prepare("DELETE FROM volunteer_profiles WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
}

// Add new volunteer profile
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_profile'])){
    $name = trim($_POST['full_name']);
    $type = trim($_POST['volunteer_type']);
    $designation = trim($_POST['designation']);
    $description = trim($_POST['description']);
    $imagePath = null;

    if(isset($_FILES['image']) && $_FILES['image']['error']===UPLOAD_ERR_OK){
        $uploadDir="../uploads/volunteers/";
        if(!is_dir($uploadDir)) mkdir($uploadDir,0777,true);
        $filename=time()."_".basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'],$uploadDir.$filename);
        $imagePath="uploads/volunteers/".$filename;
    }

    $stmt=$conn->prepare("INSERT INTO volunteer_profiles (full_name, volunteer_type, designation, description, image) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss",$name,$type,$designation,$description,$imagePath);
    $stmt->execute();
    $stmt->close();
}

// Fetch pending applications
$pending=$conn->query("SELECT * FROM volunteer_applications WHERE status='pending' ORDER BY submitted_at DESC");

// Fetch approved volunteer profiles
$profiles=$conn->query("SELECT * FROM volunteer_profiles ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Volunteer Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.table th, .table td { vertical-align: middle; }
img.profile-img { width:60px; height:60px; object-fit:cover; border-radius:50%; }
</style>
</head>
<body class="bg-light">
<div class="container py-5">

    <!-- Pending Applications Table -->
    <h2 class="mb-4">Pending Volunteer Applications</h2>
    <div class="table-responsive">
    <table class="table table-bordered table-hover bg-white shadow-sm">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Type</th>
                <th>Designation</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if($pending && $pending->num_rows>0){
            $i=1;
            while($p=$pending->fetch_assoc()){ ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= htmlspecialchars($p['full_name']) ?></td>
                <td><?= htmlspecialchars($p['email']) ?></td>
                <td><?= htmlspecialchars($p['phone']) ?></td>
                <td><?= htmlspecialchars($p['volunteer_type']) ?></td>
                <td><?= htmlspecialchars($p['designation']) ?></td>
                <td><span class="text-warning fw-bold"><?= $p['status'] ?></span></td>
                <td>
                    <a href="?approve=<?= $p['id'] ?>" class="btn btn-success btn-sm">Approve</a>
                    <a href="?reject=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Reject</a>
                </td>
            </tr>
        <?php }} else { ?>
            <tr><td colspan="8" class="text-center text-muted">No pending applications.</td></tr>
        <?php } ?>
        </tbody>
    </table>
    </div>

    <!-- Add Volunteer Profile -->
    <hr class="my-5">
    <h2 class="mb-4">Add Volunteer Profile</h2>
    <form method="post" enctype="multipart/form-data" class="card p-4 shadow-sm mb-5">
        <div class="row g-3">
            <div class="col-md-6"><input type="text" name="full_name" class="form-control" placeholder="Full Name" required></div>
            <div class="col-md-6"><input type="text" name="volunteer_type" class="form-control" placeholder="Volunteer Type" required></div>
        </div>
        <div class="row g-3 mt-2">
            <div class="col-md-6"><input type="text" name="designation" class="form-control" placeholder="Designation" required></div>
            <div class="col-md-6"><input type="file" name="image" class="form-control" accept="image/*"></div>
        </div>
        <div class="mb-3 mt-3"><textarea name="description" class="form-control" placeholder="Description" rows="3"></textarea></div>
        <button type="submit" name="add_profile" class="btn btn-primary">Save Profile</button>
    </form>

    <!-- Approved Volunteer Profiles Table -->
    <hr class="my-5">
    <h2 class="mb-4">Volunteer Profiles</h2>
    <div class="table-responsive">
    <table class="table table-bordered table-hover bg-white shadow-sm">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Profile</th>
                <th>Full Name</th>
                <th>Type</th>
                <th>Designation</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if($profiles && $profiles->num_rows>0){
            $i=1;
            while($v=$profiles->fetch_assoc()){
                $img = $v['image'] && file_exists("../".$v['image']) ? "../".$v['image'] : "../images/default-donor.png"; ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><img src="<?= $img ?>" class="profile-img"></td>
                <td><?= htmlspecialchars($v['full_name']) ?></td>
                <td><?= htmlspecialchars($v['volunteer_type']) ?></td>
                <td><?= htmlspecialchars($v['designation']) ?></td>
                <td><?= nl2br(htmlspecialchars($v['description'])) ?></td>
                <td><a href="?delete_profile=<?= $v['id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
        <?php }} else { ?>
            <tr><td colspan="7" class="text-center text-muted">No volunteer profiles added yet.</td></tr>
        <?php } ?>
        </tbody>
    </table>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
