<?php
include '../admin/auth-check.php';
include "../config.php";
include "admin-nav.php";

$success = false;
$error = '';

// Handle Add Scholar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_scholar'])) {
    $name = trim($_POST['name']);
    $designation = trim($_POST['designation']);
    $period_from = trim($_POST['period_from']);
    $period_to = trim($_POST['period_to']);

    $stmt = $conn->prepare("INSERT INTO previous_scholars (name, designation, period_from, period_to) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $designation, $period_from, $period_to);

    if ($stmt->execute()) {
        $success = true;
    } else {
        $error = "Error adding scholar: " . $stmt->error;
    }
}

// Handle Delete Scholar
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $conn->query("DELETE FROM previous_scholars WHERE id = $delete_id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

// Fetch all scholars
$result = $conn->query("SELECT * FROM previous_scholars ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Scholars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4">Add Previous Scholar</h2>

    <!-- Display success or error messages -->
    <?php if ($success) echo "<div class='alert alert-success'>✅ Scholar added successfully.</div>"; ?>
    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <!-- Add Scholar Form -->
    <form method="post">
        <input type="hidden" name="add_scholar" value="1">
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Designation</label>
            <input type="text" name="designation" class="form-control" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Period From</label>
                <input type="text" name="period_from" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Period To</label>
                <input type="text" name="period_to" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success mb-4">Add Scholar</button>
    </form>

    <h3 class="mb-3">Existing Scholars</h3>
    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Period</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= htmlspecialchars($row['name']); ?></td>
                    <td><?= htmlspecialchars($row['designation']); ?></td>
                    <td><?= htmlspecialchars($row['period_from'] . ' - ' . $row['period_to']); ?></td>
                    <td>
                        <a href="edit-scholar.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="?delete_id=<?= $row['id']; ?>" onclick="return confirm('Are you sure?');" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5" class="text-center">No scholars found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
