<?php
include '../admin/auth-check.php';
include "../config.php";
include "admin-nav.php";

// Handle AJAX request to update status
if(isset($_POST['update_status']) && isset($_POST['id'])){
    $id = intval($_POST['id']);
    $stmt = $conn->prepare("UPDATE join_requests SET status='Processed' WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    echo "success";
    exit;
}

// Fetch requests
$result = $conn->query("SELECT * FROM join_requests ORDER BY submitted_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membership Requests</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .status-btn { min-width: 100px; }
    </style>
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
                </tr>
            </thead>
            <tbody class="text-center">
            <?php
            $count = 1;
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr id='row-".$row['id']."'>";
                    echo "<td>".$count++."</td>";
                    echo "<td>".htmlspecialchars($row['full_name'])."</td>";
                    echo "<td>".htmlspecialchars($row['email'])."</td>";
                    echo "<td>".htmlspecialchars($row['phone'])."</td>";
                    echo "<td>".htmlspecialchars($row['message'])."</td>";
                    // Status Button
                    if($row['status'] === 'Pending'){
                        echo "<td>
                            <button class='btn btn-warning status-btn' onclick='updateStatus(".$row['id'].")'>Pending</button>
                        </td>";
                    } else {
                        echo "<td><span class='badge bg-success'>Processed</span></td>";
                    }
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No requests found</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function updateStatus(id){
    if(confirm("Are you connected with the member who requested to join the alumni?")){
        // Send AJAX request to update status
        const formData = new FormData();
        formData.append('update_status', 1);
        formData.append('id', id);

        fetch('<?= $_SERVER['PHP_SELF'] ?>', {
            method: 'POST',
            body: formData
        }).then(res => res.text()).then(data => {
            if(data === "success"){
                const btn = document.querySelector("#row-" + id + " .status-btn");
                btn.outerHTML = "<span class='badge bg-success'>Processed</span>";
            } else {
                alert("Something went wrong. Try again!");
            }
        });
    }
}
</script>
</body>
</html>
