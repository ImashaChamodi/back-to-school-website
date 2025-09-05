<?php
include 'auth-check.php';
include '../config.php';

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $stmt = $conn->prepare("DELETE FROM contact_messages WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
    header("Location: ".$_SERVER['PHP_SELF']); // refresh page after deletion
    exit;
}

// Fetch all messages
$result = $conn->query("SELECT * FROM contact_messages ORDER BY submitted_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Contact Messages</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Optional custom admin CSS -->
    <link rel="stylesheet" href="../css/admin-style.css">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; margin:0; padding:0; }
        .container { width: 90%; margin:auto; padding:20px 0; }
        h2 { color: #000000; text-align:center; font-size:2.5rem; margin-bottom:30px; }
        table { width:100%; border-collapse:collapse; margin-bottom:30px; }
        th, td { padding:10px; border:1px solid #ccc; }
        th { background-color:black; color:white; font-weight:bold; text-align:center; }
        tr:nth-child(even) { background-color: #e6f7e6; }
        tr:nth-child(odd) { background-color: #ffe6e6; }
        td.name { color:green; font-weight:500; }
        td.message { color:red; }
        td.delete a { color:white; background-color:red; padding:5px 10px; border-radius:5px; text-decoration:none; font-weight:bold; }
        td.delete a:hover { opacity:0.8; }
    </style>
</head>
<body>

<!-- NAVIGATION BAR -->
<?php include 'admin-nav.php'; ?>

<section class="admin-section">
    <div class="container">
        <h2>Contact Messages</h2>

        <?php if ($result && $result->num_rows > 0): ?>
            <div style="overflow-x:auto;">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Submitted At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td style="text-align:center; font-weight:bold;"><?= $i++; ?></td>
                            <td class="name"><?= htmlspecialchars($row['name']); ?></td>
                            <td><?= htmlspecialchars($row['email']); ?></td>
                            <td class="message"><?= nl2br(htmlspecialchars($row['message'])); ?></td>
                            <td style="text-align:center; font-size:0.9rem;"><?= $row['submitted_at']; ?></td>
                            <td class="delete" style="text-align:center;">
                                <a href="?delete_id=<?= $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this message?');">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p style="text-align:center; color:black; font-weight:bold;">No messages received yet.</p>
        <?php endif; ?>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
