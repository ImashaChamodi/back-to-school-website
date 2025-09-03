<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../admin/auth-check.php'; 
include "../config.php";           
include "admin-nav.php";           

// Approve volunteer
if(isset($_GET['approve'])){
    $id = intval($_GET['approve']);
    $stmt = $conn->prepare("UPDATE volunteers SET status='approved' WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Delete volunteer
if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM volunteers WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Fetch all volunteers
$result = $conn->query("SELECT * FROM volunteers ORDER BY submitted_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Volunteer Requests - Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.status-approved {color: #28a745; font-weight: bold;}
.status-pending {color: #ffc107; font-weight: bold;}
.card-volunteer {transition: transform 0.2s;}
.card-volunteer:hover {transform: translateY(-5px);}
</style>
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4 text-center text-dark">Volunteer Requests</h2>
    <div class="row g-4">

        <?php
        if($result && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $statusClass = strtolower($row['status']) === 'approved' ? 'status-approved' : 'status-pending';
                echo "<div class='col-md-6 col-lg-4'>
                        <div class='card card-volunteer shadow-sm'>
                            <div class='card-body'>
                                <h5 class='card-title'>".htmlspecialchars($row['full_name'])."</h5>
                                <p class='card-text'>
                                    <strong>Email:</strong> <a href='mailto:".htmlspecialchars($row['email'])."'>".htmlspecialchars($row['email'])."</a><br>
                                    <strong>Phone:</strong> <a href='tel:".htmlspecialchars($row['phone'])."'>".htmlspecialchars($row['phone'])."</a><br>
                                    <strong>Type:</strong> ".htmlspecialchars($row['volunteer_type'])."<br>
                                    <strong>Designation:</strong> ".htmlspecialchars($row['designation'])."<br>
                                    <strong>Date:</strong> ".$row['submitted_at']."<br>
                                    <strong>Status:</strong> <span class='$statusClass'>".ucfirst($row['status'])."</span>
                                </p>
                                <div class='d-flex gap-2'>
                                    ".($row['status']=='pending' ? "<a href='?approve=".$row['id']."' class='btn btn-success btn-sm flex-fill'>Approve</a>" : "")."
                                    <a href='?delete=".$row['id']."' class='btn btn-danger btn-sm flex-fill' onclick=\"return confirm('Delete this volunteer?');\">Delete</a>
                                </div>
                            </div>
                        </div>
                      </div>";
            }
        } else {
            echo "<p class='text-center'>No volunteer requests found.</p>";
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
