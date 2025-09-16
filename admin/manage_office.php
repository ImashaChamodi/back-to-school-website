<?php
include 'auth-check.php';
include '../config.php';
include 'admin-nav.php';

$success = '';
$error = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $group = $_POST['group'] ?? '';
    $name = trim($_POST['name'] ?? '');
    $imagePath = null;

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = "../uploads/office/";
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
        $filename = time() . "_" . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir.$filename)) {
            $imagePath = "uploads/office/".$filename;
        } else {
            $error = "Failed to upload image.";
        }
    }

    // Only proceed if no error
    if (empty($error)) {
        $stmt = null;
        if ($group === 'bearers') {
            $role = $_POST['bearers_role'] ?? '';
            $designation = $_POST['bearers_designation'] ?? '';
            if (!$role || !$designation) {
                $error = "Role and designation are required for office bearers.";
            } else {
                $stmt = $conn->prepare("INSERT INTO office_bearers (name, role, designation, image) VALUES (?,?,?,?)");
                $stmt->bind_param("ssss", $name, $role, $designation, $imagePath);
            }
        } elseif ($group === 'committee') {
            $stmt = $conn->prepare("INSERT INTO committee_members (name, image) VALUES (?,?)");
            $stmt->bind_param("ss", $name, $imagePath);
        } elseif ($group === 'patrons') {
            $designation = $_POST['patrons_designation'] ?? '';
            if (!$designation) {
                $error = "Designation is required for patrons.";
            } else {
                $stmt = $conn->prepare("INSERT INTO patrons (name, designation, image) VALUES (?,?,?)");
                $stmt->bind_param("sss", $name, $designation, $imagePath);
            }
        }

        if ($stmt && $stmt->execute()) {
            $success = "Entry added successfully!";
            $stmt->close();
        } elseif ($stmt) {
            $error = "Database error: " . $stmt->error;
            $stmt->close();
        }
    }
}

// Handle deletion
if (isset($_GET['delete'], $_GET['type'])) {
    $id = intval($_GET['delete']);
    $type = $_GET['type'];
    if ($type === 'bearer') $conn->query("DELETE FROM office_bearers WHERE id=$id");
    if ($type === 'committee') $conn->query("DELETE FROM committee_members WHERE id=$id");
    if ($type === 'patron') $conn->query("DELETE FROM patrons WHERE id=$id");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Fetch existing entries
$bearers = $conn->query("SELECT * FROM office_bearers ORDER BY id ASC");
$committee = $conn->query("SELECT * FROM committee_members ORDER BY id ASC");
$patrons = $conn->query("SELECT * FROM patrons ORDER BY id ASC");
?>

<div class="container py-5">
    <h2>Manage Office Bearers, Committee, Patrons</h2>

    <?php if ($success) echo "<div class='alert alert-success'>$success</div>"; ?>
    <?php if ($error) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <form method="post" enctype="multipart/form-data" class="card p-4 mb-5">
        <h5>Add Entry</h5>

        <div class="mb-3">
            <label>Group</label>
            <select name="group" class="form-select" required>
                <option value="">Select Group</option>
                <option value="bearers">Office Bearer</option>
                <option value="committee">Committee Member</option>
                <option value="patrons">Patron</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <!-- Office Bearers Fields -->
        <div class="bearers-fields" style="display:none;">
            <div class="mb-3">
                <label>Role</label>
                <select name="bearers_role" class="form-select">
                    <option value="">Select Role</option>
                    <option value="President">President</option>
                    <option value="Secretary">Secretary</option>
                    <option value="Treasurer">Treasurer</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Designation</label>
                <input type="text" name="bearers_designation" class="form-control">
            </div>
        </div>

        <!-- Patrons Fields -->
        <div class="patrons-fields" style="display:none;">
            <div class="mb-3">
                <label>Designation</label>
                <input type="text" name="patrons_designation" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Add</button>
    </form>

    <!-- Tables -->
    <h4>Office Bearers</h4>
    <table class="table table-bordered mb-5">
        <thead>
            <tr><th>Name</th><th>Role</th><th>Designation</th><th>Image</th><th>Action</th></tr>
        </thead>
        <tbody>
        <?php while($r = $bearers->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($r['name'] ?? '') ?></td>
                <td><?= htmlspecialchars($r['role'] ?? '') ?></td>
                <td><?= htmlspecialchars($r['designation'] ?? '') ?></td>
                <td><?= $r['image'] ? "<img src='../".$r['image']."' height='50'>" : "" ?></td>
                <td><a href="?delete=<?= $r['id'] ?>&type=bearer" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    <h4>Committee Members</h4>
    <table class="table table-bordered mb-5">
        <thead>
            <tr><th>Name</th><th>Image</th><th>Action</th></tr>
        </thead>
        <tbody>
        <?php while($r = $committee->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($r['name'] ?? '') ?></td>
                <td><?= $r['image'] ? "<img src='../".$r['image']."' height='50'>" : "" ?></td>
                <td><a href="?delete=<?= $r['id'] ?>&type=committee" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    <h4>Patrons</h4>
    <table class="table table-bordered mb-5">
        <thead>
            <tr><th>Name</th><th>Designation</th><th>Image</th><th>Action</th></tr>
        </thead>
        <tbody>
        <?php while($r = $patrons->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($r['name'] ?? '') ?></td>
                <td><?= htmlspecialchars($r['designation'] ?? '') ?></td>
                <td><?= $r['image'] ? "<img src='../".$r['image']."' height='50'>" : "" ?></td>
                <td><a href="?delete=<?= $r['id'] ?>&type=patron" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('select[name="group"]').on('change', function(){
    var val = $(this).val();
    $('.bearers-fields,.patrons-fields').hide();
    if(val==='bearers') $('.bearers-fields').show();
    if(val==='patrons') $('.patrons-fields').show();
});
</script>
