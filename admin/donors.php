<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../config.php'; // Admin DB connection

// Approve donation
if(isset($_GET['approve'])){
    $id = intval($_GET['approve']);
    $stmt = $conn->prepare("UPDATE donations SET status='approved' WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Delete donation
if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM donations WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Fetch all donations
$result = $conn->query("SELECT * FROM donations ORDER BY submitted_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Donations Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.status-approved {color: green; font-weight: bold;}
.status-pending {color: #ffc107; font-weight: bold;}
</style>
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4">Donations</h2>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Type</th>
                <th>Amount / Resource</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $count = 1;
        if($result && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $statusClass = strtolower($row['status']) === 'approved' ? 'status-approved' : 'status-pending';
                echo "<tr>";
                echo "<td>".$count++."</td>";
                echo "<td>".htmlspecialchars($row['full_name'])."</td>";
                echo "<td>".htmlspecialchars($row['address'])."</td>";
                echo "<td>".htmlspecialchars($row['phone'])."</td>";
                echo "<td>".htmlspecialchars($row['email'])."</td>";
                echo "<td>".htmlspecialchars($row['donation_type'])."</td>";
                echo "<td>".($row['donation_type']=='finance' ? htmlspecialchars($row['amount']) : htmlspecialchars($row['resource_details']))."</td>";
                echo "<td class='".$statusClass."'>".ucfirst($row['status'])."</td>";
                echo "<td>";
                if($row['status'] === 'pending'){
                    echo "<a href='?approve=".$row['id']."' class='btn btn-success btn-sm mb-1'>Approve</a>";
                }
                echo "<a href='?delete=".$row['id']."' class='btn btn-danger btn-sm mb-1' onclick=\"return confirm('Delete this donation?');\">Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9' class='text-center'>No donations found.</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
