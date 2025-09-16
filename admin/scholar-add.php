<?php
include '../admin/auth-check.php';
include "../config.php";
include "admin-nav.php";

$success = false;
$error = '';

// Handle Add Student
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_student'])) {
    $name = trim($_POST['name']);
    $year = intval($_POST['year']);
    $marks = intval($_POST['marks']);

    $stmt = $conn->prepare("INSERT INTO scholarship_students (name, year, marks) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $name, $year, $marks);

    if ($stmt->execute()) {
        $success = true;
    } else {
        $error = "Error adding student: " . $stmt->error;
    }
}

// Handle Delete Student
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $conn->query("DELETE FROM scholarship_students WHERE id = $delete_id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

// Fetch all students
$result = $conn->query("SELECT * FROM scholarship_students ORDER BY year DESC, marks DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Scholarship Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4">Add Scholarship Student</h2>

    <!-- Display messages -->
    <?php if ($success) echo "<div class='alert alert-success'>✅ Student added successfully.</div>"; ?>
    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <!-- Add Form -->
    <form method="post">
        <input type="hidden" name="add_student" value="1">
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="number" name="year" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Marks</label>
            <input type="number" name="marks" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mb-4">Add Student</button>
    </form>

    <h3 class="mb-3">Scholarship Students</h3>
    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Year</th>
                <th>Marks</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= htmlspecialchars($row['name']); ?></td>
                    <td><?= htmlspecialchars($row['year']); ?></td>
                    <td><?= htmlspecialchars($row['marks']); ?></td>
                    <td>
                        <a href="?delete_id=<?= $row['id']; ?>" onclick="return confirm('Are you sure?');" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5" class="text-center">No students found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
