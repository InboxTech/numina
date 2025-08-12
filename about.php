<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | About Us', './', 'about.php');

?>
<!--------------------------------------main start--------------------------------------------------------->
<main class="aboutus">

    <!-- <section>
        <div class="banner container-fluid">
            <div class="banner-img">
                <img src="public/images/about/digital_pharma_manufacturing.jpg" alt="Digital Pharma Manufacturing" class="img-fluid">
            </div>
        </div>

        <nav aria-label="breadcrumb" class="bg-light py-2">
            <div class="container">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="about.php">About</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Digital Pharma Manufacturing
                    </li>
                </ol>
            </div>
        </nav>
    </section> -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2> About us</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i> About us
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <!------------------------------------- About us section start --------------------------------------------->

    <section class="about-numina  mt-0 ">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 my-2" data-aos="fade-top"
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
                        <p class=" fw-light fw-normal " data-aos="fade-up" data-aos-anchor-placement="top-bottom"> We are a leading pharmaceutical manufacturer in India, producing
                            high-quality generic medicines with ISO, GMP, and WHO certifications. Our expertise and
                            global network enable us to deliver effective drugs and build lasting partnerships with top
                            pharma brands worldwide.
                        </p>
                        <p class="fw-light fw-normal" data-aos="fade-up" data-aos-anchor-placement="top-bottom"> We are committed to
                            pushing the boundaries of healthcare for a brighter, healthier
                            tomorrow—that’s the soul of our mission.
                        </p>
                        <button class="btn btn-lg btn-custom my-3">Reach out for collaboration</button>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!------------------------------------- About us section end --------------------------------------------->
  
    <!------------------------------------------------ Our story section start ------------------------------------->
    <section class="story-section">
        <div class="floating-shapes">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
        </div>

        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="story-card h-100">
                        <h1 class="top-title-about" data-aos="fade-up" data-aos-duration="800">
                            Our Story
                        </h1>

                        <h3 class="section-subtitle-about" data-aos="fade-up" data-aos-delay="100">
                            Inspired by the Mission to Enhance Lives!
                        </h3>

                        <div data-aos="fade-up" data-aos-delay="200">
                            <p class="story-text">
                                As a dynamic startup, <span class="highlight-text">Numina Pharmaceuticals</span> has
                                emerged as a leading service provider in contract pharmaceutical manufacturing in India. We are
                                passionate about improving the health of people, and with this passion, we foster our commitment to
                                advancement, transformation, and professionalism.
                            </p>
                        </div>

                        <div data-aos="fade-up" data-aos-delay="300">
                            <p class="story-text">
                                Our journey began with the idea of revolutionizing the industry by establishing a
                                manufacturing unit focused on excellence in formulation development, licensing, and commercial
                                manufacturing.
                            </p>
                        </div>

                        <div data-aos="fade-up" data-aos-delay="400">
                            <p class="story-text">
                                As the best pharmaceutical company in India, we are offering generic and branded
                                generic products, as well as nutraceuticals and cosmetics. Our manufacturing unit in Vadodara is
                                well-equipped and capable of producing different healthcare products in the form of tablets,
                                capsules, syrups, sachets, and multivitamins.
                            </p>
                        </div>

                        <div data-aos="fade-up" data-aos-delay="500">
                            <p class="story-text">
                                Numina Pharmaceuticals serves both domestic and global pharmaceutical markets and
                                is eager to partner with leading pharmaceutical companies to enhance people's health. Join us on
                                this exciting journey to create a healthier future through ground-breaking solutions and strong
                                dedication.
                            </p>
                        </div>

                        <div data-aos="fade-up" data-aos-delay="600">
                            <button class="cta-button">
                                <i class="fas fa-calendar-alt me-2"></i>
                                Craving More Details? Schedule a Call Today!
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="success-pillars">
                        <h3 class="section-subtitle-about mb-4" data-aos="fade-up" data-aos-delay="100">
                            The Pillars of Our Success!
                        </h3>

                        <h4 class="mb-4" style="color: var(--text-dark); font-weight: 700;" data-aos="fade-up" data-aos-delay="200">
                            Our success is built on:
                        </h4>

                        <div data-aos="fade-up" data-aos-delay="300">
                            <div class="pillar-item">
                                <span class="number-badge">1</span>
                                <i class="fas fa-flask pillar-icon"></i>
                                <span class="pillar-text">Research-Focused Innovation</span>
                            </div>

                            <div class="pillar-item">
                                <span class="number-badge">2</span>
                                <i class="fas fa-shield-alt pillar-icon"></i>
                                <span class="pillar-text">Integrity and Ethical Excellence</span>
                            </div>

                            <div class="pillar-item">
                                <span class="number-badge">3</span>
                                <i class="fas fa-globe-americas pillar-icon"></i>
                                <span class="pillar-text">A Global Vision and Approach</span>
                            </div>

                            <div class="pillar-item">
                                <span class="number-badge">4</span>
                                <i class="fas fa-users pillar-icon"></i>
                                <span class="pillar-text">Expertise of a Skilled Team</span>
                            </div>

                            <div class="pillar-item">
                                <span class="number-badge">5</span>
                                <i class="fas fa-cogs pillar-icon"></i>
                                <span class="pillar-text">Comprehensive One-Stop Solutions</span>
                            </div>
                        </div>

                        <div class="team-section" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="team-title">
                                <i class="fas fa-rocket me-2"></i>
                                Innovators in Action…Meet Our Team!
                            </h3>
                            <p class="team-description mb-0">
                                Introducing the dedicated team of researchers, manufacturing specialists, and
                                quality control experts working together to shape tomorrow's healthcare. They are dedicated to
                                making quality care easily accessible to people across the globe.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------ Our story section end ------------------------------------->



    <!-------------------------------------------------- Mission, vision and values section start ----------------------------------->
  
    <section class="quick-facts-main mt-5 py-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="p-lg-5 p-3">
            <h2 class="section-title text-center mb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Mission, Vision, and Values…
                Truly Foundation of Our Brilliance</h2>
            <p class="fw-light text-center my-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom">The team at
                <strong class="fw-bold"> Numina Pharmaceuticals </strong> is
                passionate and determined to <br> transform the world through their efforts. Our mission,
                vision, and values push us to grow <br> in pharmaceuticals and succeed in healthcare.
            </p>

            <div class="row gy-4">
                <div class="col-md-6 col-lg ">
                    <div class="fact-item text-center h-100" data-delay="0.1s">
                        <div class="fact-icon mb-3">
                            <i class="fa-solid fa-rocket fs-1"></i>
                        </div>
                        <h3 class="fact-number h2 mb-1">Mission</h3>
                        <p class="fw-light">To strengthen our core capabilities to meet the unmet medical needs of patients. To achieve the leading position by improving patient health and well-being.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg ">
                    <div class="fact-item text-center h-100" data-delay="0.2s">
                        <div class="fact-icon mb-3">
                            <i class="fa-solid fa-lightbulb fs-1"></i>
                        </div>
                        <h3 class="fact-number h2 mb-1">Vission</h3>
                        <p class="fw-light">To strengthen our core capabilities to meet the unmet medical needs of
                            patients. To achieve the leading position by improving patient health and well-being.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg ">
                    <div class="fact-item text-center h-100" data-delay="0.3s">
                        <div class="fact-icon mb-3">
                            <i class="fa-solid fa-hand-holding-heart fs-1"></i>
                        </div>
                        <h3 class="fact-number h2 mb-1"> Values</h3>
                        <p class="fw-light">To strengthen our core capabilities to meet the unmet medical needs of
                            patients. To achieve the leading position by improving patient health and well-being.</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-------------------------------------------------- Mission, vision and values section end ----------------------------------->

  <!-- ---------------------------------------- ceo section---------------------------------- -->
    <section data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="container mx-auto p-3 my-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="ceoCard">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <h3 class="fs-5 fw-bold title-ceo" data-aos="fade-up" data-aos-anchor-placement="top-bottom"> A Message from Our
                            CEO </h3>
                        <p class="fw-light" data-aos="fade-up" data-aos-anchor-placement="top-bottom"> At Numina
                            Pharmaceuticals, my journey has always been about improving health and
                            serving society. With the constant support of our dedicated team, trusted business partners, and
                            valued associates, we’ve built a foundation firmly rooted in quality, innovation, transparency and
                            reliability. I believe that by working together as a team, we can create a world where our products
                            help people live healthier lives.
                        </p>

                        <p class="fw-light" data-aos="fade-up" data-aos-anchor-placement="top-bottom"> As we continue to evolve,
                            we will foster collaboration, develop cutting-edge
                            solutions, and form global partnerships to make our path smoother. I am excited about the
                            opportunities ahead, and together, we will move forward with a shared goal of offering better
                            healthcare. </p>

                        <h5 class="text-uppercase title-ceo mt-3 fw-medium mb-1" data-zanim-xs="{&quot;delay&quot;:0.3}" style="transform: translate(0px, 0px); opacity: 1;">Payal Patel</h5>
                        <p class="fw-light" data-zanim-xs="{&quot;delay&quot;:0.4}" style="transform: translate(0px, 0px); opacity: 1;">
                            CEO &amp; Founder, Numina Healthcare Pvt. Ltd.</p>
                    </div>
                    <div class="col-lg-6">
                        <img style="width: 100%; border-radius:10px;" src="./public/images/about/Payal-Patel_1671188089.webp" />

                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
<!--------------------------------------main end--------------------------------------------------------->

<?php include('footer.php'); ?>