<?php
include_once('service/DbConnect.php');
include_once('service/ProductService.php');
include_once('service/ProductModel.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | Home', './', 'index.php');

$product = ProductService::getAllProducts();
?>


<main>

    <!-- ////////banner section ========> -->

    <section class="hero-banner">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active slide1">
                    <div class="carousel-caption">
                        <h1 class="hero-title">Shaping Healthier Tomorrows, Today</h1>
                        <p class="hero-subtitle">Delivering quality healthcare products that improve the well-being of millions across India and around the world. Excellence in pharmaceutical manufacturing with ISO, GMP, and WHO certifications.</p>
                        <div class="hero-buttons">
                            <a href="#products" class="btn btn-primary-custom">
                                <i class="fas fa-pills me-2"></i>Our Products
                            </a>
                            <a href="#about" class="btn btn-outline-custom">
                                <i class="fas fa-info-circle me-2"></i>Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item slide2">
                    <div class="carousel-caption">
                        <h1 class="hero-title">Elevating Healthcare Excellence</h1>
                        <p class="hero-subtitle">Advanced research and development in infectious diseases, HIV, immunology, respiratory, and oncology. Our commitment to innovation drives breakthrough solutions for global health challenges.</p>
                        <div class="hero-buttons">
                            <a href="#research" class="btn btn-primary-custom">
                                <i class="fas fa-microscope me-2"></i>R&D Focus
                            </a>
                            <a href="#contact" class="btn btn-outline-custom">
                                <i class="fas fa-handshake me-2"></i>Partner With Us
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item slide3">
                    <div class="carousel-caption">
                        <h1 class="hero-title">World-Class Manufacturing</h1>
                        <p class="hero-subtitle">Modern facilities equipped with cutting-edge technology, automated systems, and precision tools. Stringent quality management ensures every product meets international standards.</p>
                        <div class="hero-buttons">
                            <a href="#manufacturing" class="btn btn-primary-custom">
                                <i class="fas fa-industry me-2"></i>Our Facilities
                            </a>
                            <a href="#quality" class="btn btn-outline-custom">
                                <i class="fas fa-certificate me-2"></i>Quality Policy
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- Features Section -->
        <div class="features-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="feature-title">ISO & WHO Certified</div>
                            <div class="feature-text">International Standards</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-flask"></i>
                            </div>
                            <div class="feature-title">Advanced R&D</div>
                            <div class="feature-text">Innovation Driven</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="feature-title">Global Reach</div>
                            <div class="feature-text">Worldwide Distribution</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="feature-title">Quality Care</div>
                            <div class="feature-text">Patient Focused</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">

        <!-- Capabilities -->   
        <section id="hero" class=" px-lg-5 p-3">
            <div class="row align-items-center px-lg-5 px-md-3 pe-0">
                <div class="col-lg-6 my-2" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <p class="journeyTitle">Capabilities</p>
                    <div class="">
                        <h2 class="top-title">
                            Discover the World of Health & Wellness with Numina</h2>
                        <p class="fs-5 fw-normal ">
                            Your trusted resource for comprehensive information on medicines, tablets, and syrups.
                            Find an extensive database that empowers you to make informed decisions about your
                            health.
                        </p>
                    </div>
                    <div class="">
                        <button class="btn btn-custom btn-lg">Connect with us today</button>
                    </div>
                </div>
                <div class="col-lg-6 my-2" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="rounded-4 bannerImage overflow-hidden">
                        <img src="public/images/home/April2025.png" class="main-img" />
                        <!-- <div class="pinch-img">
                        </div> -->
                    </div>
                </div>

            </div>
        </section>

        <!-------------------------  about numina section  ------------------------->
        <section class="about-numina">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-lg-6 my-2" data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        <div class="rounded-4 bannerImage overflow-hidden">
                            <img src="public/images/home/April2025.png" class="main-img" />
                            <!-- <div class="pinch-img">
                        </div> -->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class=" p-lg-5">
                            <p class="journeyTitle">About Us</p>
                            <h2 class="aboutTitle">Numina Pharmaceuticals - Elevating Healthcare Excellence</h2>
                            <p class="fs-5 fw-normal "> We are a leading pharmaceutical manufacturer in India, producing
                                high-quality generic medicines with ISO, GMP, and WHO certifications. Our expertise and
                                global network enable us to deliver effective drugs and build lasting partnerships with top
                                pharma brands worldwide.
                            </p>
                            <button class="btn btn-lg btn-custom my-3">Reach out for collaboration</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="p-lg-5 p-3">
                    <div class="swiper medicineSwiper">
                        <h2 class=" text-center mb-4">Our Medicine </h2>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Antacid </h3>
                                        <p class=" medicineSubTitle me my-4"> fast Relief for heartburn & indigestion </p>
                                        <p class="medicineCategoryTitle"> Relief in 60 Secs </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Antibiotics </h3>
                                        <p class=" medicineSubTitle my-4"> Targeted treatments for bacterial infections.
                                        </p>
                                        <p class="medicineCategoryTitle"> Solution for Every Infection</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Analgesic </h3>
                                        <p class=" medicineSubTitle my-4"> Fast-acting solutions to manage pain</p>
                                        <p class="medicineCategoryTitle"> Pain Relief in 30 Mins </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Analgesic, Antipyretic, and Anti-emetic </h3>
                                        <p class=" medicineSubTitle my-4"> Pain, fever, and nausea relief in one drug</p>
                                        <p class="medicineCategoryTitle"> Triple Action, 1 Pill </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Analgesic & Anti-inflammatory </h3>
                                        <p class=" medicineSubTitle my-4"> Relieves pain and controls inflammation</p>
                                        <p class="medicineCategoryTitle"> Dual Action in 45 Minutes </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Anti-allergic </h3>
                                        <p class=" medicineSubTitle my-4"> Rapid relief from allergy symptoms </p>
                                        <p class="medicineCategoryTitle"> Breathe Easy in 5 Minutes </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Multivitamins and Supplements </h3>
                                        <p class=" medicineSubTitle my-4"> Essential nutrients for overall wellness </p>
                                        <p class="medicineCategoryTitle"> Daily Health Boost </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Anti-diabetics </h3>
                                        <p class=" medicineSubTitle my-4"> Effective management of blood sugar </p>
                                        <p class="medicineCategoryTitle"> 1 Dose, Better Control </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Cardiovascular Drugs </h3>
                                        <p class=" medicineSubTitle my-4"> Supports iovascular health quickly </p>
                                        <p class="medicineCategoryTitle"> Heart Health Matters </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Antimicrobials </h3>
                                        <p class=" medicineSubTitle my-4"> Protection against harmful microorganisms </p>
                                        <p class="medicineCategoryTitle"> Defend in 10 Days </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="medicine-card">
                                    <div class="p-3">
                                        <h3 class="medicineTitle"> Antiretrovirals (ARVs) </h3>
                                        <p class=" medicineSubTitle my-4"> Effective management for healthier living with
                                            HIV </p>
                                        <p class="medicineCategoryTitle"> Solution for Life </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div> -->
                    </div>

                </div>
            </div>

        </section>

        <!-- ---------------------------------Research & Development--------------------------------->
        <section class="rd-section">
            <div class="floating-elements">
                <div class="floating-element"></div>
                <div class="floating-element"></div>
                <div class="floating-element"></div>
            </div>

            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Research & Development</h2>
                    <p class="section-subtitle">
                        Our R&D team focuses on ground-breaking solutions and advanced research to produce effective medicines that enhance lives and advance healthcare globally.
                    </p>
                </div>

                <div class="rd-content">
                    <div class="rd-card">
                        <div class="rd-icon">🧬</div>
                        <h3>Innovative Research</h3>
                        <p>Pioneering advanced pharmaceutical research with cutting-edge methodologies and state-of-the-art laboratory facilities to develop next-generation medicines.</p>
                    </div>

                    <div class="rd-card">
                        <div class="rd-icon">🔬</div>
                        <h3>Quality Assurance</h3>
                        <p>Rigorous testing protocols and stringent quality control measures ensure our products meet the highest international standards and regulatory requirements.</p>
                    </div>

                    <div class="rd-card">
                        <div class="rd-icon">⚗️</div>
                        <h3>Drug Development</h3>
                        <p>From concept to clinical trials, our comprehensive drug development process transforms promising compounds into life-saving medications.</p>
                    </div>
                </div>

                <div class="therapeutic-areas">
                    <h3 class="therapeutic-title">Our Therapeutic Focus Areas</h3>
                    <div class="therapeutic-grid">
                        <div class="therapeutic-item">
                            <h4>🦠 Infectious Diseases</h4>
                            <p>Developing treatments for bacterial, viral, and fungal infections</p>
                        </div>
                        <div class="therapeutic-item">
                            <h4>🧪 HIV Treatment</h4>
                            <p>Advanced antiretroviral therapies and prevention solutions</p>
                        </div>
                        <div class="therapeutic-item">
                            <h4>🫁 Immunology & Respiratory</h4>
                            <p>Treatments for autoimmune disorders and respiratory conditions</p>
                        </div>
                        <div class="therapeutic-item">
                            <h4>🎗️ Oncology</h4>
                            <p>Innovative cancer treatments and targeted therapies</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Quick Facts Section -->
        <section class="quick-facts-main py-5">
            <div class="p-lg-5 p-3">
                <h2 class="section-title text-center mb-5">Quick facts</h2>

                <div class="row gy-4">
                    <div class="col-md-6 col-lg ">
                        <div class="fact-item text-center h-100" data-delay="0.1s">
                            <div class="fact-icon mb-3">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                                    <line x1="8" y1="21" x2="16" y2="21" />
                                    <line x1="12" y1="17" x2="12" y2="21" />
                                </svg>
                            </div>
                            <h3 class="fact-number h2 mb-1">9</h3>
                            <p class="fact-label">Manufacturing<br>Facilities</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg ">
                        <div class="fact-item text-center h-100" data-delay="0.2s">
                            <div class="fact-icon mb-3">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                                </svg>
                            </div>
                            <h3 class="fact-number h2 mb-1">10+</h3>
                            <p class="fact-label">Therapies</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg ">
                        <div class="fact-item text-center h-100" data-delay="0.3s">
                            <div class="fact-icon mb-3">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14,2 14,8 20,8" />
                                    <line x1="16" y1="13" x2="8" y2="13" />
                                    <line x1="16" y1="17" x2="8" y2="17" />
                                    <polyline points="10,9 9,9 8,9" />
                                </svg>
                            </div>
                            <h3 class="fact-number h2 mb-1">132</h3>
                            <p class="fact-label">DMF<br>Filings</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg ">
                        <div class="fact-item text-center h-100" data-delay="0.4s">
                            <div class="fact-icon mb-3">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M9 12l2 2 4-4" />
                                    <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3" />
                                    <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3" />
                                    <path d="M12 3c0 1-1 3-3 3s-3-2-3-3 1-3 3-3 3 2 3 3" />
                                    <path d="M12 21c0-1 1-3 3-3s3 2 3 3-1 3-3 3-3-2-3-3" />
                                </svg>
                            </div>
                            <h3 class="fact-number h2 mb-1">252</h3>
                            <p class="fact-label">ANDAs<br>Filings</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg ">
                        <div class="fact-item text-center h-100" data-delay="0.5s">
                            <div class="fact-icon mb-3">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                            </div>
                            <h3 class="fact-number h2 mb-1">17,000+</h3>
                            <p class="fact-label">Employees</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!------------------------- journey  Section  ------------------------->
        <div id="journey">
            <div class="journey-header text-center py-3">
                <p class="journeyTitle">Our Journey Forward</p>
                <h2 class="top-title">See How We’re Growing</h2>
            </div>
            <div class="journey-body p-5">
                <div class="swiper journeySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="journeyCard">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">


                                    <div class="slide-img">
                                        <img src="public/images/home/section3/world_class_manufacturing_infrastructure.jpg"
                                            alt="">
                                    </div>
                                    <span>World-Class Manufacturing Infrastructure</span>
                                    <div>
                                        <p>Our manufacturing units are equipped with the latest machinery and automated
                                            systems to produce high-quality drugs.</p>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="journeyCard">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">


                                    <div class="slide-img">
                                        <img src="public/images/home/section3/next_gen_quality_control_mechanisms.png"
                                            alt="">
                                    </div>
                                    <span>Next-gen Quality Control Mechanisms</span>
                                    <div>
                                        <p>Our every product meets the highest quality and safety standards by using
                                            latest technologies like AI-driven inspections & real-time monitoring.</p>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="journeyCard">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">


                                    <div class="slide-img">
                                        <img src="public/images/home/section3/r&d_driven_iInnovation.JPG" alt="">
                                    </div>
                                    <span>R&D-Driven Innovation</span>
                                    <div>
                                        <p>Our innovative R&D team focuses on developing new formulations and improving
                                            how we make them to be the best in the market.</p>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="journeyCard">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">


                                    <div class="slide-img">
                                        <img src="public/images/home/section3/global_supply_chain_expansion.jpg" alt="">
                                    </div>
                                    <span>Global Supply Chain Expansion</span>
                                    <div>
                                        <p>We have a smart delivery network that helps us deliver our products to
                                            customers fast, secure across the world.</p>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="journeyCard">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">


                                    <div class="slide-img">
                                        <img src="public/images/home/section3/supporting_diversity_inclusion.jpg"
                                            alt="">
                                    </div>
                                    <span>Supporting Diversity and Inclusion</span>
                                    <div>
                                        <p>We’ve certifications like ISO 9001 and GMP that show our products are meeting
                                            international standards for quality, and safety.</p>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="journeyCard">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">


                                    <div class="slide-img">
                                        <img src="public/images/home/section3/collaborative_innovation_partnerships.jpg"
                                            alt="">
                                    </div>
                                    <span>Collaborative Innovation Partnerships</span>
                                    <div>
                                        <p>Through partnerships with industry leaders and research groups, we are
                                            developing innovative ideas and improving our manufacturing techniques.</p>
                                    </div>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="section3-footer text-center mb-5">
                <button class="btn btn-lg btn-custom">Inspired? Let’s Collaborate</button>
            </div>

        </div>

        <!------------------------- comunity Section  ------------------------->
        <div id="comunity">
            <!-- <div class="comunity-main">
                    <video src="public/images/home/gradient-inverted.mp4" autoplay muted loop></video>
                </div> -->

            <div class="comunity-head px-2">
                <!-- <p class="fs-4">Life at Numina</p> -->
                <h2 class="display-5 ">Creating Positive Change in Communities</h2>
            </div>

            <div class="comunity-body py-5">
                <div class="swiper comunitySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none link-light pos">
                                <div class="slider-img">
                                    <img src="public/images/home/section4/EnhancingGlobalHealthjpg.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Enhancing Global Health</h2>
                                    <p>We want to reduce serious diseases in low-income countries by focusing on
                                        preventing
                                        and treating infections.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none link-light">
                                <div class="slider-img">
                                    <img src="public/images/home/section4/ProductGovernance.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Product Governance</h2>
                                    <p>We ensure the quality, safety and uninterrupted supply of our mission of
                                        combining
                                        science, talent, and technology.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none link-light">
                                <div class="slider-img">
                                    <img src="public/images/home/section4/ProtectingOurPlanet.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Protecting Our Planet</h2>
                                    <p>We are working toward a healthier planet with goals for 2030 and 2045,
                                        focusing on
                                        being net zero and positive for nature.</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none link-light">
                                <div class="slider-img">
                                    <img src="public/images/home/section4/ImprovingAccessforAll.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Improving Access for All</h2>
                                    <p>We are making our products affordable and available to more people worldwide
                                        through
                                        fair pricing and collaborations.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none link-light">
                                <div class="slider-img">
                                    <img src="public/images/home/section4/SupportingDiversityandInclusion.png"
                                        alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Supporting Diversity and Inclusion</h2>
                                    <p>To help our diverse patients, we need different voices in our clinical trials
                                        and
                                        support an inclusive team.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0);" class="text-decoration-none link-light">
                                <div class="slider-img">
                                    <img src="public/images/home/section4/UpholdingEthicalStandards.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Upholding Ethical Standards</h2>
                                    <p>Our culture encourages everyone to do the right thing, voice their opinions,
                                        and
                                        speak up about any concerns.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <!------------------------- Policy Section  ------------------------->
        <div id="policy">
            <div class="container text-end">
                <div class="row justify-content-center">
                    <div class="col-lg-4  m-lg-0 mt-4 d-flex justify-content-center">
                        <div class="custom-card">
                            <div class="card-body">
                                <h4 class="card-title     py-3">Quality Policy</h4>
                                <p class="card-text">We are dedicated to delivering world-class products using a
                                    stringent quality management system.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  m-lg-0 mt-4 d-flex justify-content-center">
                        <div class="custom-card">
                            <div class="card-body">
                                <h4 class="card-title  py-3">Manufacturing Excellence</h4>
                                <p class="card-text">Our modern facilities are equipped with the latest machinery,
                                    automated systems, and precision tools.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  m-lg-0 mt-4 d-flex justify-content-center">
                        <div class="custom-card">
                            <div class="card-body">
                                <h4 class="card-title  py-3">R&D</h4>
                                <p class="card-text">Our R&D team focuses on ground-breaking solutions and advanced
                                    research to produce effective medicines.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>