<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Loader -->
<div class="loader" id="loader-fade">
    <div class="loader-container center-block">
        <div class="grid-row">
            <div class="col center-block">
                <ul class="loading reversed">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- About Us Hero Section with Background Image -->
<section class="p-0">
    <div class="hero-section" style="
        background-image: url('images/About.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;">
        
        <div class="container">
            <h1 class="display-4 text-white">About Us</h1>
            <p class="lead text-white">Building futures by rebuilding schools</p>
        </div>
    </div>
</section>

<!-- About School Section – Modern Text-Only Design -->

<section class="py-5" style="background-color: #f1f6fb;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="p-5 rounded shadow-sm" style="background: #ffffff; border-left: 6px solid #24c1dd;">
                    <h2 class="text-dark mb-4 text-center" style="font-size: 3.3rem;">Kadanapitiya Primary School</h2>
                    <div class="text-muted" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
                        <p>
                            Kadanapitiya Primary School has been at the heart of our village in the <strong>Kalutara District, Sri Lanka</strong>, for generations. Located in a peaceful, nature-rich environment, it has nurtured young minds with care and dedication, shaping the lives of countless students who have gone on to become respected individuals in society.
                        </p>
                        <p>
                            Today, the school serves around <strong>50 children</strong>, guided by <strong>8 committed teachers and staff members</strong>. As a primary institution, it provides education up to <strong>Grade 5</strong> and continues to be a place where learning and values come together in a close-knit community setting.
                        </p>
                        <p>
                            However, recent years have brought significant challenges. The <strong>COVID-19 pandemic</strong>, economic hardships, and a growing shift toward urban schools have caused a decline in enrollment, placing Kadanapitiya Primary School at risk of closure under government policy.
                        </p>
                        <p>
                            In response, a group of past pupils united to form the <strong>Old Pupils Association (OPA)</strong>—a dedicated effort to safeguard the school’s legacy. With a shared commitment to rebuilding and revitalizing the school, the OPA is working hand-in-hand with the community to ensure that future generations continue to benefit from this treasured institution.
                        </p>
                        <p class="mb-0">
                            We believe Kadanapitiya Primary School is more than just a school—it is a <strong>heritage</strong>, a <strong>foundation for opportunity</strong>, and a <strong>symbol of hope</strong> for the village. Together, we strive to keep its doors open, its classrooms filled, and its legacy alive.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Staff Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4 text-center">
            <div class="col-12">
                <h3 class="text-dark mb-3">Meet Our Staff</h3>
                <p class="text-muted mb-4">
                    Our dedicated academic and non-academic staff ensure every student receives the support they need to succeed.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <?php
            $staff = [
                ['img' => 'images/staff1.jpg', 'name' => 'N.D.M.S. Napatage', 'role' => 'Principal - 3 Years'],
                ['img' => 'images/staff2.jpg', 'name' => 'H.R.T.P Peeris', 'role' => 'Teacher - 14 Years'],
                ['img' => 'images/staff3.jpg', 'name' => 'J.D.D Kularathne', 'role' => 'Teacher - 12 Years'],
                ['img' => 'images/staff4.jpg', 'name' => 'O.M.T. Manike', 'role' => 'Teacher - 8 Years'],
                ['img' => 'images/staff5.jpg', 'name' => 'W.A.S. Tharangani', 'role' => 'Teacher - 3 Years'],
                ['img' => 'images/staff6.jpg', 'name' => 'K.T.K. Amarasiri', 'role' => 'Teacher - 3 Years'],
                ['img' => 'images/staff7.jpg', 'name' => 'S.O.A.T. Madhushani', 'role' => 'Teacher - 3 Months'],
                ['img' => 'images/staff8.jpg', 'name' => 'K.G.S Anuradhi', 'role' => 'Development Officer- 4 Years'],
                ['img' => 'images/staff9.jpg', 'name' => 'R.A.K Pradeepika', 'role' => 'Non-Academic Staff- 3 Years']
            ];

            foreach ($staff as $member) : ?>
                <div class="col-sm-6 col-md-3">
                    <div class="card text-center shadow-sm h-100">
                        <img src="<?= $member['img'] ?>" class="card-img-top object-fit-cover" alt="<?= $member['name'] ?>" style="height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #24c1dd;"><?= $member['name'] ?></h5>
                            <p class="card-text text-muted mb-0"><?= $member['role'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 2. Mission Section -->
<section class="py-5" style="background-color: #f1f6fb;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Left -->
            <div class="col-md-6">
                <div class="p-5 rounded shadow-sm" style="background: #ffffff; border-left: 6px solid #24c1dd;">
                    <h2 class="text-dark mb-4 text-center" style="font-size: 3rem;">Our Mission</h2>
                    <p class="text-muted" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
                        Our mission is to protect Kadanapitiya Primary School from closure and secure its future as a vital center of learning in the village. We are committed to reviving student enrollment, providing quality education in a supportive environment, and equipping both teachers and students with modern resources.
                    </p>
                    <p class="text-muted mb-0" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
                        Together with the Old Pupils Association and community supporters, we lead initiatives such as Mission 100, Scholar Drive, and the English Literacy Program to ensure the school not only survives but thrives for generations to come.
                    </p>
                </div>
            </div>

            <!-- Image Right -->
            <div class="col-md-6">
                <img src="images/About_image.jpg" class="img-fluid rounded shadow" alt="Mission Image" style="width: 100%; height: auto;">
            </div>
        </div>
    </div>
</section>





<!-- 1. Vision Section -->
<section class="py-5" style="background-color: #f1f6fb;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="p-5 rounded shadow-sm" style="background: #ffffff; border-left: 6px solid #24c1dd;">
                    <h2 class="text-dark mb-4 text-center" style="font-size: 3rem;">Our Vision</h2>
                    <p clas s="text-muted" style="text-align: justify; font-size: 1.05rem; line-height: 1.8;">
                        Our vision is to be a strong and friendly school at the heart of Kandanapitiya village, 
                        where every child feels safe, happy, and inspired to learn. We aim to give students the 
                        skills and values they need for the future while encouraging more children to join and 
                        remain in school. By working closely with our community and past pupils, we strive to 
                        make Kadanapitiya Primary School a proud example of a rural school that truly cares for 
                        every child.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'includes/footer.php'; ?>

<!-- JS files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>
</body>
</html>
