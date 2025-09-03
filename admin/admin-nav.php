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
                <?php 
                $current = basename($_SERVER['PHP_SELF']); 
                ?>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'membership-requests.php') ? 'active' : '' ?>" 
                       href="membership-requests.php">Membership Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'donors.php') ? 'active' : '' ?>" 
                       href="donors.php">Donations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'volunteers.php') ? 'active' : '' ?>" 
                       href="volunteers.php">Volunteers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'scholar-add.php') ? 'active' : '' ?>" 
                       href="scholar-add.php">Scholar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger <?= ($current == 'logout.php') ? 'active' : '' ?>" 
                       href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
