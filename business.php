<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | About Us', './', 'business.php');

?>
<!--------------------------------------main start--------------------------------------------------------->
<main class="aboutus">

    <!-- breadecrumbe--------------->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2> Business </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i> Business
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="business-intro py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-10">
                    <div class="intro-content">
                        <h2 class="intro-title">Advancing Global Healthcare</h2>
                        <p class="intro-text">
                            We are in the business of identifying healthcare gaps and strengthening global health systems by addressing them with innovative solutions. As a vertically integrated pharmaceutical company, we are globally recognized for our excellence in research and development, manufacturing, and commercialization of a comprehensive range of healthcare products. We deliver large-scale, high-quality solutions on time to our clients worldwide.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="business-divisions py-5">
        <div class="container">
            <h2 class="divisions-title text-center mb-4">Our Business Divisions</h2>

            <!-- Swiper Wrapper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="division-card h-100">
                            <div class="division-icon text-center mb-3">
                                <i class="fa-solid fa-hospital"></i>
                            </div>
                            <h3 class="division-title">Domestic Formulations</h3>
                            <p class="division-subtitle">
                                Delivering tailored healthcare solutions for the Indian market
                            </p>
                            <p class="division-description">
                            <p class="division-description">
                                We manufacture and promote a diverse range of generic medicines specifically designed for the Indian healthcare landscape. Our comprehensive portfolio spans across chronic therapeutic segments including infectious diseases, HIV, immunology/respiratory, and oncology. Through our specialized marketing network, we have built strong brand recognition and customer loyalty in the domestic market.
                            </p>
                            </p>
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="division-card h-100">
                            <div class="division-icon text-center mb-3">
                                <i class="fa-solid fa-globe" aria-hidden="true"></i>
                            </div>
                            <h3 class="division-title">International Markets</h3>
                            <p class="division-subtitle">
                                Bringing quality and innovation to the global pharmaceutical
                                market
                            </p>
                            <p class="division-description">
                                Our strategic investments in international R&D infrastructure and manufacturing facilities enable us to serve global markets effectively. We are committed to improving health outcomes worldwide through our expanding product portfolio, strategic partnerships, and regulatory compliance across multiple international markets including regulated and emerging economies.
                            </p>
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="division-card h-100">
                            <div class="division-icon text-center mb-3">
                                <i class="fa-solid fa-mortar-pestle"></i>
                            </div>
                            <h3 class="division-title">Active Pharmaceutical Ingredients</h3>
                            <p class="division-subtitle">
                                Leveraging expertise to become the preferred API supplier globally
                            </p>
                            <p class="division-description">
                                Our vertical integration into API manufacturing has been a cornerstone of our success. Through strategic capacity expansion and technological investments, we have established ourselves as a preferred manufacturer of select APIs. Our state-of-the-art facilities ensure consistent quality, regulatory compliance, and reliable supply chain management for our global customers.
                            </p>
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="division-card h-100">
                            <div class="division-icon text-center mb-3">
                                <i class="fa-solid fa-microscope"></i>
                            </div>
                            <h3 class="division-title">Research & Development</h3>
                            <p class="division-subtitle">
                                Pioneering innovative solutions for complex healthcare challenges
                            </p>
                            <p class="division-description">
                                Our dedicated R&D division focuses on breakthrough research in four key therapeutic areas: infectious diseases, HIV, immunology/respiratory, and oncology. We invest significantly in advanced research methodologies, cutting-edge technology, and collaborative partnerships to develop next-generation pharmaceutical solutions that address unmet medical needs.
                            </p>
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                </div>


            </div>
    </section>

    <section class="capabilities-section py-5">
        <div class="container">
            <h2 class="divisions-title text-center mb-4">Our Core Capabilities</h2>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="capability-item h-100 text-center">
                        <div class="capability-icon mb-3"><i class="fa-solid fa-square-check"></i></div>
                        <h4 class="capability-title">Quality Excellence</h4>
                        <p class="capability-description">ISO, GMP, and WHO certified facilities ensuring world-class quality standards and regulatory compliance across all our operations.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="capability-item h-100 text-center">
                        <div class="capability-icon mb-3"><i class="fa-solid fa-industry"></i></div>
                        <h4 class="capability-title">Manufacturing Excellence</h4>
                        <p class="capability-description">Modern facilities equipped with latest machinery, automated systems, and precision tools for efficient and scalable production.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="capability-item h-100 text-center">
                        <div class="capability-icon mb-3"><i class="fa-solid fa-earth-americas"></i></div>
                        <h4 class="capability-title">Global Reach</h4>
                        <p class="capability-description">Established presence across multiple international markets with strong distribution networks and regulatory expertise.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="capability-item h-100 text-center">
                        <div class="capability-icon mb-3"><i class="fa-solid fa-handshake"></i></div>
                        <h4 class="capability-title">Strategic Partnerships</h4>
                        <p class="capability-description">Long-lasting relationships with leading pharma brands globally, fostering innovation and market expansion opportunities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
            768: { slidesPerView: 2 },
            992: { slidesPerView: 3 },
        },
    });
</script>
