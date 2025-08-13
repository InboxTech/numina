<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | Sustaniability', './', 'sustaniability.php');

?>
<!--------------------------------------main start--------------------------------------------------------->
<main >

 <section class="hero-section-sustaniability">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 mx-auto text-center hero-content">
                    <div class="hero-title">Sustainability at Numina Pharmaceuticals</div>
                    <p class="hero-subtitle">Shaping Healthier Tomorrows Through Responsible Healthcare Manufacturing</p>
                    <p class="lead mb-4">Our commitment to sustainable growth strengthens our mission to deliver world-class pharmaceutical products while protecting the environment and communities we serve.</p>
                    <a href="#commitment" class="btn btn-numina">Explore Our Journey</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Commitment Section -->
    <section id="commitment" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center mb-5">
                    <h2 class="section-title">Our Sustainability Commitment</h2>
                    <p class="section-subtitle">Integrated systems aligned with our mission to advance healthcare excellence while ensuring environmental stewardship and social responsibility.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-3">
                    <div class="sustainability-card text-center">
                        <div class="sustainabilitycard-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4 class="sustainabilit-card-title">Environmental Excellence</h4>
                        <p class="card-text">Minimizing our environmental footprint through innovative manufacturing processes, waste reduction, and renewable energy adoption across all facilities.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="sustainability-card text-center">
                        <div class="sustainabilitycard-icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <h4 class="sustainabilit-card-title">Water Stewardship</h4>
                        <p class="card-text">Achieving water neutrality through conservation initiatives, groundwater recharge programs, and advanced wastewater treatment technologies.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="sustainability-card text-center">
                        <div class="sustainabilitycard-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <h4 class="sustainabilit-card-title">Circular Manufacturing</h4>
                        <p class="card-text">Implementing circular economy principles to minimize hazardous and non-hazardous waste through innovative recycling and resource optimization.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="sustainability-card text-center">
                        <div class="sustainabilitycard-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4 class="sustainabilit-card-title">Community Health</h4>
                        <p class="card-text">Creating positive social impact by improving healthcare access, supporting local communities, and ensuring responsible pharmaceutical manufacturing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section section-padding">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Our Sustainability Impact</h2>
                    <p class="section-subtitle">Measurable progress in our journey towards sustainable pharmaceutical manufacturing excellence</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">35%</div>
                        <div class="stat-label">GHG Reduction</div>
                        <div class="stat-desc">Since 2020 baseline</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">50%</div>
                        <div class="stat-label">Water Conservation</div>
                        <div class="stat-desc">Through efficiency programs</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">80%</div>
                        <div class="stat-label">Waste Recycling</div>
                        <div class="stat-desc">Circular economy approach</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">GMP Compliance</div>
                        <div class="stat-desc">ISO & WHO certified</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center mb-5">
                    <h2 class="section-title">Our Sustainability Journey</h2>
                    <p class="section-subtitle">Key milestones in Numina's commitment to responsible pharmaceutical manufacturing</p>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2024</div>
                        <div class="timeline-title">Net Zero Commitment & Green Manufacturing</div>
                        <p>Launched comprehensive Net Zero roadmap with renewable energy adoption across all manufacturing facilities and R&D centers.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2023</div>
                        <div class="timeline-title">Water Neutrality Initiative</div>
                        <p>Implemented advanced water management systems focusing on conservation, treatment, and groundwater recharge programs.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2022</div>
                        <div class="timeline-title">Integrated Quality & Environmental Systems</div>
                        <p>Enhanced our ISO and GMP certifications with integrated environmental management systems across all therapeutic areas.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2021</div>
                        <div class="timeline-title">Sustainable Supply Chain Program</div>
                        <p>Established partnerships with eco-conscious suppliers and implemented sustainable packaging solutions for global distribution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Goals Section -->
    <section class="goals-section section-padding">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-10 mx-auto">
                    <h2 class="section-title text-white">2030 Sustainability Goals</h2>
                    <p class="section-subtitle text-white opacity-75">Ambitious targets aligned with our mission to elevate healthcare excellence responsibly</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="goal-card">
                        <div class="goal-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <h4 class="goal-title">Carbon Neutral Manufacturing</h4>
                        <p>Achieve Net Zero emissions across all pharmaceutical manufacturing processes and R&D operations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="goal-card">
                        <div class="goal-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <h4 class="goal-title">Water Positive Operations</h4>
                        <p>Contribute more clean water to communities than consumed in our manufacturing and research processes.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="goal-card">
                        <div class="goal-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h4 class="goal-title">Sustainable Medicines</h4>
                        <p>100% sustainable packaging and green chemistry principles in all therapeutic areas including oncology and infectious diseases.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




</main>
<!--------------------------------------main end--------------------------------------------------------->

<?php include('footer.php'); ?>

