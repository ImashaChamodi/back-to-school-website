<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back To School Admin Panel</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="dashboard.php">Back To School Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php 
                $current = basename($_SERVER['PHP_SELF']); 
                ?>
                
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'donors.php') ? 'active' : '' ?>" href="donors.php">Donations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'volunteers.php') ? 'active' : '' ?>" href="volunteers.php">Volunteers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'membership-requests.php') ? 'active' : '' ?>" href="membership-requests.php">Membership Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'scholar-add.php') ? 'active' : '' ?>" href="scholar-add.php">Scholar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'manage_office.php') ? 'active' : '' ?>" href="manage_office.php">Office Bearers</a>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'contact_messages.php') ? 'active' : '' ?>" href="contact_messages.php">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger <?= ($current == 'logout.php') ? 'active' : '' ?>" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
