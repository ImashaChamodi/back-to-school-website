<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../config.php'; // Database connection

// Handle Mark Processed
if (isset($_GET['mark_processed'])) {
    $id = intval($_GET['mark_processed']);
    $stmt = $conn->prepare("UPDATE join_requests SET status='processed' WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: membership-requests.php");
    exit;
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM join_requests WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: membership-requests.php");
    exit;
}

// Fetch Requests
$result = $conn->query("SELECT * FROM join_requests ORDER BY submitted_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Requests - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h2 {
            color: #343a40;
            font-weight: 700;
        }
        table {
            background-color: #fff;
        }
        table th {
            text-align: center;
        }
        table td {
            vertical-align: middle;
        }
        .btn-sm {
            font-size: 0.8rem;
        }
        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #f1f3f5;
        }
        .table-hover tbody tr:hover {
            background-color: #e9ecef;
        }
        .status-processed {
            color: green;
            font-weight: bold;
        }
        .status-pending {
            color: #ffc107;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="dashboard.php">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link active" href="membership-requests.php">Membership Requests</a></li>
                <li class="nav-item"><a class="nav-link" href="donations.php">Donations</a></li>
                <li class="nav-item"><a class="nav-link" href="volunteers.php">Volunteers</a></li>
                <li class="nav-item"><a class="nav-link text-danger" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container py-5">
    <h2 class="mb-4">Membership Requests</h2>

    <table class="table table-bordered table-striped table-hover shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $count = 1;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $statusClass = strtolower($row['status']) === 'processed' ? 'status-processed' : 'status-pending';
                echo "<tr>";
                echo "<td>".$count++."</td>";
                echo "<td>".htmlspecialchars($row['full_name'] ?? '')."</td>";
                echo "<td><a href='mailto:".htmlspecialchars($row['email'] ?? '')."'>".htmlspecialchars($row['email'] ?? '')."</a></td>";
                echo "<td><a href='tel:".htmlspecialchars($row['phone'] ?? '')."'>".htmlspecialchars($row['phone'] ?? '')."</a></td>";
                echo "<td>".htmlspecialchars($row['message'] ?? '')."</td>";
                echo "<td>".$row['submitted_at']."</td>";
                echo "<td class='".$statusClass."'>".ucfirst($row['status'] ?? '')."</td>";
                echo "<td>
                        ".($row['status'] === 'pending' ? "<a href='?mark_processed=".$row['id']."' class='btn btn-success btn-sm mb-1'>Mark Processed</a>" : "")."
                        <a href='?delete=".$row['id']."' class='btn btn-danger btn-sm mb-1' onclick=\"return confirm('Are you sure you want to delete this request?');\">Delete</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8' class='text-center'>No membership requests found.</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
