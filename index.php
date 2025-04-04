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
        <div class="container-fluid p-5">
            <section id="hero">
                <div class="row align-items-center px-lg-5 px-md-3 pe-0">
                    <div class="col-lg-6 my-2" data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        <!-- <h1 class="h3">Behind the science</h1> -->
                        <div class="">
                            <h2 class="top-title">
                                Discover the World of Health & Wellness with Numina</h2>
                            <p class="fs-5 fw-normal my-5">
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
                        <div class="rounded-4 overflow-hidden">
                            <img src="public/images/home/discover.jpg" class="main-img" />
                            <!-- <div class="pinch-img">
                        </div> -->
                        </div>
                    </div>

                </div>
            </section>

            <!-------------------------  about numina section  ------------------------->
           <section class="about-numina">
                <div class="container">
                    <div class="text-center p-5">
                        <h2>Numina Pharmaceuticals - Elevating Healthcare Excellence</h2>
                        <p class="fs-5 lh-lg"> We are a leading pharmaceutical manufacturer in India, producing
                            high-quality generic medicines with ISO, GMP, and WHO certifications. Our expertise and
                            global network enable us to deliver effective drugs and build lasting partnerships with top
                            pharma brands worldwide.
                        </p>
                        <button class="btn btn-lg btn-custom my-3">Reach out for collaboration</button>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="p-5">
                        <div class="swiper medicineSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Antacid </h3>
                                            <p class="fs-4 my-4"> fast Relief for heartburn & indigestion </p>
                                            <p class="fs-4"> Relief in 60 Secs </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Antibiotics </h3>
                                            <p class="fs-4 my-4"> Targeted treatments for bacterial infections.
                                            </p>
                                            <p class="fs-4"> Solution for Every Infection</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Analgesic </h3>
                                            <p class="fs-4 my-4"> Fast-acting solutions to manage pain</p>
                                            <p class="fs-4"> Pain Relief in 30 Mins </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Analgesic, Antipyretic, and Anti-emetic </h3>
                                            <p class="fs-4 my-4"> Pain, fever, and nausea relief in one drug</p>
                                            <p class="fs-4"> Triple Action, 1 Pill </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Analgesic & Anti-inflammatory </h3>
                                            <p class="fs-4 my-4"> Relieves pain and controls inflammation</p>
                                            <p class="fs-4"> Dual Action in 45 Minutes </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Anti-allergic </h3>
                                            <p class="fs-4 my-4"> Rapid relief from allergy symptoms </p>
                                            <p class="fs-4"> Breathe Easy in 5 Minutes </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Multivitamins and Supplements </h3>
                                            <p class="fs-4 my-4"> Essential nutrients for overall wellness </p>
                                            <p class="fs-4"> Daily Health Boost </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Anti-diabetics </h3>
                                            <p class="fs-4 my-4"> Effective management of blood sugar </p>
                                            <p class="fs-4"> 1 Dose, Better Control </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Cardiovascular Drugs </h3>
                                            <p class="fs-4 my-4"> Supports iovascular health quickly </p>
                                            <p class="fs-4"> Heart Health Matters </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Antimicrobials </h3>
                                            <p class="fs-4 my-4"> Protection against harmful microorganisms </p>
                                            <p class="fs-4"> Defend in 10 Days </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="medicine-card">
                                        <div class="p-3">
                                            <h3 class=""> Antiretrovirals (ARVs) </h3>
                                            <p class="fs-4 my-4"> Effective management for healthier living with
                                                HIV </p>
                                            <p class="fs-4"> Solution for Life </p>
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

            <!------------------------- journey  Section  ------------------------->
            <div id="journey">
                <div class="journey-header text-center py-3">
                    <p>Our Journey Forward</p>
                    <h2 class="top-title">See How We’re Growing</h2>
                </div>
                <div class="journey-body p-5">
                    <div class="swiper journeySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">
                                    <span>World-Class Manufacturing Infrastructure</span>
                                    <div class="slide-img">
                                        <img src="public/images/home/section3/world_class_manufacturing_infrastructure.jpg"
                                            alt="">
                                    </div>
                                    <div>
                                        <p>Our manufacturing units are equipped with the latest machinery and automated
                                            systems to produce high-quality drugs.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">
                                    <span>Next-gen Quality Control Mechanisms</span>
                                    <div class="slide-img">
                                        <img src="public/images/home/section3/next_gen_quality_control_mechanisms.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <p>Our every product meets the highest quality and safety standards by using
                                            latest technologies like AI-driven inspections & real-time monitoring.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">
                                    <span>R&D-Driven Innovation</span>
                                    <div class="slide-img">
                                        <img src="public/images/home/section3/r&d_driven_iInnovation.JPG" alt="">
                                    </div>
                                    <div>
                                        <p>Our innovative R&D team focuses on developing new formulations and improving
                                            how we make them to be the best in the market.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">
                                    <span>Global Supply Chain Expansion</span>
                                    <div class="slide-img">
                                        <img src="public/images/home/section3/global_supply_chain_expansion.jpg" alt="">
                                    </div>
                                    <div>
                                        <p>We have a smart delivery network that helps us deliver our products to
                                            customers fast, secure across the world.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">
                                    <span>Supporting Diversity and Inclusion</span>
                                    <div class="slide-img">
                                        <img src="public/images/home/section3/supporting_diversity_inclusion.jpg"
                                            alt="">
                                    </div>
                                    <div>
                                        <p>We’ve certifications like ISO 9001 and GMP that show our products are meeting
                                            international standards for quality, and safety.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="text-decoration-none link-dark">
                                    <span>Collaborative Innovation Partnerships</span>
                                    <div class="slide-img">
                                        <img src="public/images/home/section3/collaborative_innovation_partnerships.jpg"
                                            alt="">
                                    </div>
                                    <div>
                                        <p>Through partnerships with industry leaders and research groups, we are
                                            developing innovative ideas and improving our manufacturing techniques.</p>
                                    </div>
                                </a>
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
                <div class="comunity-main">
                    <video src="public/images/home/gradient-inverted.mp4" autoplay muted loop></video>
                </div>

                <div class="comunity-head py-5">
                    <!-- <p class="fs-4">Life at Numina</p> -->
                    <h2 class="display-5">Creating Positive Change in Communities</h2>
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
                                    <h4 class="card-title  py-3">Quality Policy</h4>
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