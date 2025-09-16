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

    <!-- HISTORY SECTION -->
    <section class="bd-history-section position-relative">

        <!-- Background Image -->
        <div class="bd-history-bg position-absolute top-0 start-0 w-100 h-100"></div>

        <div class="container position-relative z-2 pt-5 mt-5">

            <!-- History Content Card -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="bd-history-card bg-white rounded-4 shadow-lg p-4 p-lg-5 border-start border-5 border-lightblue">

                        <!-- Title Inside Card -->
                        
<div class="main-title">
    <h2>Our History</h2>
</div>


                        <!-- History Text -->
                        <div class="bd-history-text">
                            <p>Kadanapitiya Junior School has a proud history that stretches back over a century. It was founded through the generosity and vision of Mr. Don Arnolis Ranathunga, the manager of the Arakavila Rubber Estate. In 1920, he donated one acre of land at Horagahakanda to establish a school for children who had no access to formal education.</p>
                            <p>The first school building a simple structure with a coconut frond roof, 100 feet in length was built on this land. Mr. Piyadasa Ramachandra from Ehaliyagoda served as the very first teacher, guiding the first group of 25 children. In June 1921, with the efforts of L. Makre, Director of Education, the school was officially registered as Kadanapitiya Baudhdha Misra Patashalawa.</p>
                            <p>From 1920 to 1924, the school functioned entirely through the personal contributions of Mr. Ranathunga, without any external aid. By June 1924, the school had grown to 178 students (124 boys and 54 girls) with a teaching staff of seven members. As the number of students increased, the building was expanded several times.</p>
                            <p>In 1926, the school was handed over to the government through a conditional gift deed. At that time, there were ten teachers and the principal was H.S. Maithri Wardhana. Prior to this, the founding principals Piyadasa Rama Chandra and S.P. Karyawasam D.H. Rathnaweera worked tirelessly to develop the school.</p>
                            <p>Mr. Ranathunga continued to support education in the area by responding to a request from Mr. L.L. Hunter, Kalutara Government Agent, to allocate two acres of land at Godaparagahahena for a girls’ school.</p>
                            <p>In 1950, Kadanapitiya Junior School was relocated to its present premises. According to the gift deed, the Horagahakanda Old School Estate was then returned to Mr. Ranathunga’s son, Sugathadasa Wimalasena Ranatunga.</p>
                            <p>Today, the school continues to uphold the vision of its founders, providing quality education and nurturing generations of students with dedication and care.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- PAST PRINCIPALS SECTION -->
    <section class="bd-principals-section py-5 bg-light-custom">
        <div class="container">
        <div class="main-title">
            <h2 >Past Principals</h2>
        </div>
            <div class="bd-timeline">
                <?php
                $principals = [
                    "Pandita Piyadasa Rama Chandra – Founding Principal (~1921)",
                    "S.P. Karyawasam D.E. Weera – Principal (before 1926)",
                    "H.S. Maithreewardhana – Principal at government takeover (1926)",
                    "W.D.S. Dharmawardhana – (Dates not specified)",
                    "H.D.J. Samarasinghe – (Dates not specified)",
                    "D.S. Gunawardhana – (Dates not specified)",
                    "G. Weerathunga – 31 Dec 1950 – 8 May 1952",
                    "K.B. Kularatne – 1 Jan 1951 – 13 Apr 1951",
                    "R. Kusumawathi – 1 May 1951 – 31 Aug 1951; 16 Nov 1962 – 31 Dec 1962; 15 Jan 1966 – 31 Dec 1967",
                    "D.B. Balasuriya – 1 Sep 1951 – 13 Apr 1962",
                    "U.L. Sirisena – 1 May 1962 – 15 Nov 1962",
                    "A.C. Chandrasekhara – 1 Jan 1963 – 14 Jan 1966",
                    "M.D. Kularatne – 1 Jan 1968 – 14 Jul 1970",
                    "W. Nimaladasa – 15 Jul 1970 – 26 Aug 1978",
                    "B. Noamis – 27 Aug 1978 – 29 Dec 1989",
                    "S. Chandrasena – 13 Dec 1989 – 21 Feb 1990; also 13 Jul 1990",
                    "G.D.L. Leelarathna – 22 Feb 1990 – 31 Dec 2000",
                    "P.M. Sunil – 1 Jan 2001 – 28 Feb 2006",
                    "P. Belin Nona – 1 Mar 2006 – 31 Aug 2006",
                    "Nandasiri Ukwattha – 1 Apr 2006 – 31 Dec 2022",
                    "N.D.M.S. Napatage – 23 Dec 2022 – Present"
                ];
                foreach ($principals as $i => $p) {
                    echo '<div class="bd-timeline-item"><span class="bd-timeline-dot"></span><p>' . $p . '</p></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- JS & Bootstrap -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/functions.js"></script>