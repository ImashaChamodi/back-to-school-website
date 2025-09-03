<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'includes/header.php';
include 'includes/navbar.php';
?>

<body data-bs-spy="scroll" data-bs-target=".navbar-nav">

<!-- HISTORY SECTION -->
<section class="py-5 history-section" style="background: url('images/History.png') center/cover no-repeat fixed; background-size: cover; position: relative;">

    <!-- Top Space to Avoid Overlap -->
    <div style="height: 5in;"></div>

    <div class="container">

        <!-- Section Title with Blur & Background -->
        <div class="text-center mb-5">
            <div style="display: inline-block; background: rgba(255,255,255,0.3); backdrop-filter: blur(8px); padding: 30px 40px; border-radius: 12px;">
                <h2 class="text-dark section-title" style="font-size: 3rem; font-weight: 700; color:#000;">Our History</h2>
                <p class="text-dark" style="font-size:1.2rem; line-height:1.6; font-weight:500;">
                    Discover the milestones that shaped Kadanapitiya Primary School over the years.
                </p>
            </div>
        </div>

        <!-- History Cards -->
        <div class="row g-5 justify-content-center">
            <?php
            $history = [
                ["1920", "Foundation", "Kadanapitiya Primary School was founded through the generosity of Mr. Don Arnolis Ranathunga. One acre of land was donated at Horagahakanda to establish a school for children without formal education."],
                ["1921", "First School Building", "The first school building—a simple coconut frond roof structure—was built. Mr. Piyadasa Ramachandra served as the first teacher guiding 25 children."],
                ["1924", "Growth", "By 1924, the school had grown to 178 students and 7 teachers. The building was expanded multiple times to accommodate increasing numbers."],
                ["1926", "Government Takeover", "In 1926, the school was handed over to the government. The founding principals had worked tirelessly to develop the school."],
                ["1950", "Relocation", "The school was relocated to its present premises. The vision of the founders continues to guide education today."]
            ];

            foreach($history as $item){
                echo '
                <div class="col-lg-4 col-md-6">
                    <div class="history-card p-4 rounded shadow-sm h-100 text-center animate__animated animate__fadeInUp" 
                         style="background: linear-gradient(to bottom, rgba(255,255,255,0.85), rgba(240,248,255,0.85)); border-left: 6px solid #24c1dd; transition: transform 0.3s, box-shadow 0.3s;">
                        <div class="history-year mb-3" 
                             style="font-size:1.6rem; font-weight:700; color:#24c1dd;">'.$item[0].'</div>
                        <h4 class="history-title mb-3" style="font-size:1.5rem; font-weight:700; color:#000;">'.$item[1].'</h4>
                        <p class="history-desc text-justify" style="color:#333; line-height:1.7; font-weight:500;">'.$item[2].'</p>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- PAST PRINCIPALS -->
<section class="py-5 bg-light-custom">
    <div class="container">
        <h2 class="text-dark mb-4 text-center section-title">Past Principals</h2>
        <div class="row">
            <?php
            $principals = [
                "Pandita Piyadasa Rama Chandra – Founding Principal (~1921)",
                "S.P. Karyawasam D.E. Weera – Principal (before 1926)",
                "D.H. Rathnaweera – Principal (before 1926)",
                "H.S. Maithri Wardhana – Principal at government takeover (1926)",
                "W.D.S. Dharmawardhana",
                "H.D.J. Samarasinghe",
                "D.S. Gunawardhana",
                "G. Weerathunga – 31 Dec 1950 – 8 May 1952",
                "K.B. Kularatne – 1 Jan 1951 – 13 Apr 1951",
                "R. Kusumawathi – 1951, 1962, 1966 (multiple terms)",
                "D.B. Balasuriya – 1951 – 1962",
                "U.L. Sirisena – 1962",
                "A.C. Chandrasekhara – 1963 – 1966",
                "M.D. Kularatne – 1968 – 1970",
                "W. Nimaladasa – 1970 – 1978",
                "B. Noamis – 1978 – 1989",
                "S. Chandrasena – 1989 – 1990",
                "G.D.L. Leelarathna – 1990 – 2000",
                "P.M. Sunil – 2001 – 2006",
                "P. Belin Nona – 2006",
                "Nandasiri Ukwattha – 2006 – 2022",
                "N.D.M.S. Napatage – 2022 – Present"
            ];
            foreach($principals as $p){
                echo '<div class="col-md-6 mb-2"><p class="principal-item">📖 '.$p.'</p></div>';
            }
            ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="css/style.css">

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>

<!-- Custom CSS -->
<style>
.history-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

@media (max-width: 991px) {
    .history-card {
        padding: 30px 20px;
    }
}
@media (max-width: 767px) {
    .history-card {
        padding: 25px 15px;
    }
}

/* Past Principals */
.principal-item {
    border-left: 4px solid #24c1dd;
    padding-left: 10px;
    margin-bottom: 10px;
}
</style>
