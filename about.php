<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/header.php';
include 'includes/navbar.php';
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">
<!-- About Us Hero Section with Background Image -->
<section class="p-0">
    <div class="hero-section" style="
        background-image: url('images/aboutus.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;">
        
        <div class="container">
            <h1 class="display-4 fw-bold text-white">About Us</h1>
            <p class="lead text-white">Building futures by rebuilding schools</p>
        </div>
    </div>
</section>


<!-- Mission Section -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Our Mission</h2>
        <p class="text-center">
            Our mission is to restore and strengthen educational opportunities for children in rural and underdeveloped areas. Many schools today lack basic infrastructure such as safe classrooms, clean water, and proper learning materials. By focusing on rebuilding these facilities, we create environments where children can thrive and learn safely. We aim to bridge the gap between potential and opportunity by ensuring students have access to the tools they need. From providing textbooks and uniforms to offering emotional support programs, we believe education is the most powerful way to break the cycle of poverty. Our mission is more than just charity—it’s about long-term change. Through community involvement and sustainable solutions, we ensure that every contribution creates a lasting difference.
        </p>
    </div>
</section>

<!-- Vision Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Our Vision</h2>
        <p class="text-center">
            We envision a world where every child, regardless of where they live, has the right to learn in a safe, welcoming, and inspiring environment. Our vision is rooted in equality, where quality education is not a privilege but a universal right. We aim to create a future where school dropouts are minimized, literacy rates improve, and communities grow stronger through educated generations. Our approach goes beyond just building schools—we build hope, confidence, and dreams. By working closely with local communities and volunteers, we strive to empower the next generation of leaders, thinkers, and changemakers. A child's environment shapes their future, and our vision is to make that environment one filled with opportunity and care. Together, we believe we can reshape education for the better.
        </p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JS files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
