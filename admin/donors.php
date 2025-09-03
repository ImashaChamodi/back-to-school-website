<?php
include 'auth-check.php';
include '../config.php';
include "admin-nav.php";

// Approve or Delete
if(isset($_GET['approve'])){
    $id=intval($_GET['approve']);
    $stmt=$conn->prepare("UPDATE donations SET status='approved' WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
}
if(isset($_GET['delete'])){
    $id=intval($_GET['delete']);
    $stmt=$conn->prepare("DELETE FROM donations WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
}

// Fetch
$result=$conn->query("SELECT * FROM donations ORDER BY submitted_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Donations Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.status-approved {color: #28a745; font-weight: bold;}
.status-pending {color: #ffc107; font-weight: bold;}
.card-donor {transition: transform 0.2s;}
.card-donor:hover {transform: translateY(-5px);}
</style>
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4 text-center">Donations</h2>
    <div class="row g-4">
        <?php
        if($result && $result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $statusClass = strtolower($row['status'])==='approved' ? 'status-approved' : 'status-pending';
                echo "<div class='col-md-6 col-lg-4'>
                        <div class='card card-donor shadow-sm'>
                            <div class='card-body'>
                                <h5 class='card-title'>".htmlspecialchars($row['full_name'])."</h5>
                                <p class='card-text'>
                                    <strong>Type:</strong> ".htmlspecialchars($row['donation_type'])."<br>
                                    <strong>Amount / Resource:</strong> ".($row['donation_type']=='finance'?htmlspecialchars($row['amount']):htmlspecialchars($row['resource_details']))."<br>
                                    <strong>Status:</strong> <span class='$statusClass'>".ucfirst($row['status'])."</span>
                                </p>
                                <div class='d-flex gap-2'>
                                    ".($row['status']=='pending'? "<a href='?approve=".$row['id']."' class='btn btn-success btn-sm flex-fill'>Approve</a>":"")."
                                    <a href='?delete=".$row['id']."' class='btn btn-danger btn-sm flex-fill' onclick=\"return confirm('Delete this donation?');\">Delete</a>
                                </div>
                            </div>
                        </div>
                      </div>";
            }
        } else echo "<p class='text-center'>No donations found.</p>";
        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
