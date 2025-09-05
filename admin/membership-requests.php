<?php
include '../admin/auth-check.php';
include "../config.php";
include "admin-nav.php";

// Handle status update
if(isset($_POST['update_status_id'])){
    $id = intval($_POST['update_status_id']);
    $stmt = $conn->prepare("UPDATE join_requests SET status='Processed' WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

// Handle delete
if(isset($_POST['delete_id'])){
    $id = intval($_POST['delete_id']);
    $stmt = $conn->prepare("DELETE FROM join_requests WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

// Fetch requests
$result = $conn->query("SELECT * FROM join_requests ORDER BY submitted_at DESC");
?>

<head>
    <meta charset="UTF-8">
    <title>Membership Requests</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4 text-center">Membership Requests</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
            <?php
            $count = 1;
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$count++."</td>";
                    echo "<td>".htmlspecialchars($row['full_name'])."</td>";
                    echo "<td>".htmlspecialchars($row['email'])."</td>";
                    echo "<td>".htmlspecialchars($row['phone'])."</td>";
                    echo "<td>".htmlspecialchars($row['message'])."</td>";

                    // Clean status for comparison
                    $status = strtolower(trim($row['status']));

                    // Status badge
                    if($status === 'pending'){
                        echo "<td><span class='badge bg-warning text-dark'>Pending</span></td>";
                    } elseif($status === 'processed') {
                        echo "<td><span class='badge bg-success'>Processed</span></td>";
                    } else {
                        echo "<td><span class='badge bg-secondary'>Unknown</span></td>";
                    }

                    // Actions: Update status / Delete
                    echo "<td class='d-flex justify-content-center gap-2'>";
                    if($status === 'pending'){
                        echo "<form method='post' style='display:inline-block;'>
                                <input type='hidden' name='update_status_id' value='".$row['id']."'>
                                <button type='submit' class='btn btn-sm btn-primary'>Mark Processed</button>
                              </form>";
                    }
                    echo "<form method='post' style='display:inline-block;' onsubmit=\"return confirm('Are you sure want to delete this request?');\">
                            <input type='hidden' name='delete_id' value='".$row['id']."'>
                            <button type='submit' class='btn btn-sm btn-danger'>Delete</button>
                          </form>";
                    echo "</td>";

                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No requests found</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
