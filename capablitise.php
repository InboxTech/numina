<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | About Us', './', 'capablitise.php');

?>
<!--------------------------------------main start--------------------------------------------------------->
<main class="aboutus">

    <!-- besadecrumbe--------------->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>  Capabilities   </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i>  Capabilities  
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <!-- Capabilities Overview -->
    <section class="capabilities-overview py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="intro-title">Comprehensive Pharmaceutical Solutions</h2>
                <p class="intro-text">As a leading pharmaceutical manufacturing company in India, Numina Pharmaceuticals combines cutting-edge technology, regulatory expertise, and scientific innovation to deliver world-class healthcare solutions across four key therapeutic areas.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6 col-md-6">
                    <div class="capability-card h-100 text-center p-4">
                        <div class="capability-icon mb-3"><i class="fa-solid fa-industry"></i></div>
                        <h3>Manufacturing Excellence</h3>
                        <p>State-of-the-art manufacturing facilities equipped with modern machinery, automated systems, and precision tools to ensure consistent product quality.</p>
                        <ul class="capability-features text-start">
                            <li>ISO certified manufacturing facilities</li>
                            <li>GMP compliant production processes</li>
                            <li>WHO certified quality standards</li>
                            <li>Advanced automation and control systems</li>
                            <li>Scalable production capabilities</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="capability-card h-100 text-center p-4">
                        <div class="capability-icon mb-3"> <i class="fa-solid fa-microscope"></i></div>
                        <h3>Research & Development</h3>
                        <p>Our dedicated R&D team focuses on innovative solutions and advanced research to develop effective medicines for global healthcare challenges.</p>
                        <ul class="capability-features text-start">
                            <li>Advanced analytical and development labs</li>
                            <li>Formulation development expertise</li>
                            <li>API research and synthesis</li>
                            <li>Clinical trial management</li>
                            <li>Regulatory affairs support</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="capability-card h-100 text-center p-4">
                        <div class="capability-icon mb-3"><i class="fa-solid fa-square-check"></i></div>
                        <h3>Quality Assurance</h3>
                        <p>Stringent quality management systems ensuring every product meets international standards and regulatory requirements.</p>
                        <ul class="capability-features text-start">
                            <li>Comprehensive quality control testing</li>
                            <li>Stability testing and validation</li>
                            <li>Regulatory compliance management</li>
                            <li>Documentation and traceability</li>
                            <li>Continuous improvement processes</li>
                        </ul>   
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="capability-card h-100 text-center p-4">
                        <div class="capability-icon mb-3"><i class="fa-solid fa-earth-americas"></i></div>
                        <h3>Global Distribution</h3>
                        <p>Extensive distribution network and strategic partnerships enabling us to serve healthcare needs across India and international markets.</p>
                        <ul class="capability-features text-start">
                            <li>Pan-India distribution network</li>
                            <li>International market presence</li>
                            <li>Cold chain logistics capabilities</li>
                            <li>Regulatory approvals across markets</li>
                            <li>Strategic partnerships with global brands</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Therapeutic Areas -->
    <section class="therapeutic-areas-capablitise py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Core Therapeutic Focus Areas</h2>
                <p>Our specialized expertise spans four critical therapeutic areas where we develop and manufacture life-changing medications</p>
            </div>

            <div class="row  g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="therapeutic-card text-center p-4 h-100">
                        <div class="therapeutic-icon mb-3">🦠</div>
                        <h3>Infectious Diseases</h3>
                        <p>Developing advanced antimicrobial and anti-infective treatments to combat bacterial, viral, and fungal infections with innovative formulations.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="therapeutic-card text-center p-4 h-100">
                        <div class="therapeutic-icon mb-3">🩺</div>
                        <h3>HIV Treatment</h3>
                        <p>Specialized antiretroviral therapies and combination treatments designed to improve patient outcomes and quality of life for HIV patients.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="therapeutic-card text-center p-4 h-100">
                        <div class="therapeutic-icon mb-3">🫁</div>
                        <h3>Immunology & Respiratory</h3>
                        <p>Comprehensive solutions for autoimmune disorders and respiratory conditions, including asthma, COPD, and allergic diseases.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="therapeutic-card text-center p-4 h-100">
                        <div class="therapeutic-icon mb-3">🎗️</div>
                        <h3>Oncology</h3>
                        <p>Cutting-edge cancer treatments including chemotherapy agents, targeted therapies, and supportive care medications for comprehensive cancer management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Standards -->
    <section class="quality-standards py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Quality Certifications & Standards</h2>
                <p>Our commitment to excellence is validated by internationally recognized certifications and compliance standards</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="standard-badge text-center p-4 h-100">
                        <h4>ISO Certified</h4>
                        <p>International quality management standards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="standard-badge text-center p-4 h-100">
                        <h4>GMP Compliant</h4>
                        <p>Good Manufacturing Practice guidelines</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="standard-badge text-center p-4 h-100">
                        <h4>WHO Certified</h4>
                        <p>World Health Organization standards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="standard-badge text-center p-4 h-100">
                        <h4>FDA Approved</h4>
                        <p>US Food and Drug Administration compliance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Partner With Us</h2>
            <p class="cta-text">Join us in our mission to create positive change in global healthcare and build a healthier tomorrow for communities worldwide.</p>
            <a href="contact_us.php" class="cta-button">Get In Touch</a>
        </div>
    </section>



</main>
<!--------------------------------------main end--------------------------------------------------------->

<?php include('footer.php'); ?>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Swiper Init -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true, // loop works for infinite sliding
        autoplay: {
            delay: 3000, // time in ms between slides
            disableOnInteraction: false, // keep autoplay after user swipes
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
        },
    });
</script>