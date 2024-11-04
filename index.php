<?php
    include_once('service/DbConnect.php');
    include_once('service/ProductService.php');
    include_once('service/ProductModel.php');

    include_once('header.php');
    $header = new Header();
    $header->includeHeader('Numina | Home', './');

    $product = ProductService::getAllProducts();

?>

<main>
    <div class="container-fluid">
        <div id="section1" class="row p-0 m-0 ps-5">
            <div class="col-lg-6 m-lg-auto">
                <!-- <h1 class="h3">Behind the science</h1> -->
                <div class="">
                    <h2 class="display-1">Top Pharmaceutical Manufacturing Company in India</h2>
                    <p class="fs-4">
                        Shaping Healthier Tomorrows, Today- Delivering quality healthcare products that improve the well-being of
                        millions across India and around the world. CTA-Connect with us today!
                    </p>
                </div>
                <div class="">
                    <button class="btn btn-custom btn-lg">Connect with us today</button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden">
                    <div class="pinch-img">
                        <img src="public/images/section3/openart-image_uShboVPI_1730117810929_raw.jpg" class="main-img" />
                    </div>
                </div>
            </div>

        </div>

        <!------------------------- Section 2 ------------------------->
        <div id="section2">
            <div class="section2-main">
                <video src="public/images/respiratory-syncytial-virus-rsv-science-animation-16x9-gskcom-only.mp4" autoplay muted loop></video>
            </div>
            <div class="section2-head">
                <div class="bg-test">
                    <div class="row justify-content-center ">
                        <div class="col-lg-8 col-10">
                            <div class="">
                                <!-- <h2 class="fs-4">Our purpose</h2> -->
                                <h2 class="fs-4">Numina Pharmaceuticals - Elevating Healthcare Excellence</h2>
                                <span class="fs-2 fw-light">
                                    We are an eminent pharmaceutical manufacturing firm in India, offering a huge range of generic
                                    medicines to advance the healthcare and wellness of people across the globe. Our commitment to
                                    excellence is backed by a team of professionals with rich experience in pharmaceutical
                                    manufacturing, R& D and quality assurance. We have received certification from ISO, GMP quality,
                                    and WHO that reflects our commitment to meet high standards. Using our rich industry knowledge,
                                    expertise and global connections, we manufacture high-quality, effective drugs to enhance the
                                    lives of individuals dealing with different health problems. We are excited to work with top
                                    pharma brands globally and build long-lasting connections with them.
                                </span>
                                <p class="fs-4 fw-light mt-3">
                                    Our R&D focus is on four therapeutic areas: infectious diseases, HIV, immunology/respiratory and oncology
                                </p>
                            </div>
                            <div class="">
                                <button class="btn btn-lg btn-custom my-3">Reach out for collaboration</button>
                            </div>
                            <div class="">
                                <a href="#" class=" link-dark">Why invest in Numina?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section2-body">
                <div class="swiper section2Swiper">
                    <div class="swiper-wrapper">

                    <?php
                        foreach($product as $product){
                            echo'
                                <div class="swiper-slide card border-0">
                                    <div class="card-body">
                                        <div class="card-title text-uppercase">'. $product->getProductTitle() .'</div>
                                        <div class="card-title display-6 link-custom">'. $product->getProductSubTitle() .'</div>
                                        <div class="card-text mb-5">'. $product->getProductShortDescription() .'</div>
                                        <div class="link-footer"><a href="#" class="link-dark text-decoration-none">'. $product->getProductLink() .'</a></div>
                                    </div>
                                </div>
                            ';
                        }
                    ?>

                    </div>

                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <!------------------------- Section 3 ------------------------->
        <div id="section3" class="py-lg-5">
            <div class="section3-header text-center py-3">
                <p>Our Journey Forward</p>
                <h2>See How We’re Growing</h2>
            </div>
            <div class="section3-body p-5">
                <div class="swiper section3Swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <span>World-Class Manufacturing Infrastructure</span>
                                <div class="slide-img">
                                    <img src="public/images/section3/openart-image_uShboVPI_1730117810929_raw.jpg" alt="">
                                </div>
                                <div>
                                    <p>Our manufacturing units are equipped with the latest machinery and automated systems to produce high-quality drugs.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <span>World-Class Manufacturing Infrastructure</span>
                                <div class="slide-img">
                                    <img src="public/images/section3/slide_1.jpg" alt="">
                                </div>
                                <div>
                                    <p>Our manufacturing units are equipped with the latest machinery and automated systems to produce high-quality drugs.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <span>Next-gen Quality Control Mechanisms</span>
                                <div class="slide-img">
                                    <img src="public/images/section3/slide_2.jpg" alt="">
                                </div>
                                <div>
                                    <p>Our every product meets the highest quality and safety standards by using latest technologies like AI-driven inspections & real-time monitoring.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <span>R&D-Driven Innovation</span>
                                <div class="slide-img">
                                    <img src="public/images/section3/slide_3.jpg" alt="">
                                </div>
                                <div>
                                    <p>Our innovative R&D team focuses on developing new formulations and improving how we make them to be the best in the market.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <span>Global Supply Chain Expansion</span>
                                <div class="slide-img">
                                    <img src="public/images/section3/slide_4.jpg" alt="">
                                </div>
                                <div>
                                    <p>We have a smart delivery network that helps us deliver our products to customers fast, secure across the world.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <span>Global Standard Certifications</span>
                                <div class="slide-img">
                                    <img src="public/images/section3/slide_5.jpg" alt="">
                                </div>
                                <div>
                                    <p>We’ve certifications like ISO 9001 and GMP that show our products are meeting international standards for quality, and safety.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <span>Collaborative Innovation Partnerships</span>
                                <div class="slide-img">
                                    <img src="public/images/section3/slide_6.jpg" alt="">
                                </div>
                                <div>
                                    <p>Through partnerships with industry leaders and research groups, we are developing innovative ideas and improving our manufacturing techniques.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="section3-footer text-center">
                <button class="btn btn-lg btn-custom">Inspired? Let’s Collaborate</button>
            </div>

        </div>

        <!------------------------- Section 4 ------------------------->
        <div id="section4">
            <div class="section4-main">
                <video src="public/images/gradient-inverted.mp4" autoplay muted loop></video>
            </div>

            <div class="section4-head py-5">
                <!-- <p class="fs-4">Life at Numina</p> -->
                <h2 class="display-5">Creating Positive Change in Communities</h2>
            </div>

            <div class="section4-body py-5">
                <div class="swiper section4Swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-light pos">
                                <div class="slider-img">
                                    <img src="public/images/section4/slide_1.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Enhancing Global Health</h2>
                                    <p>We want to reduce serious diseases in low-income countries by focusing on preventing
                                        and treating infections.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-light">
                                <div class="slider-img">
                                    <img src="public/images/section4/slide_2.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Supporting Diversity and Inclusion</h2>
                                    <p>To help our diverse patients, we need different voices in our clinical trials and
                                        support an inclusive team.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-light">
                                <div class="slider-img">
                                    <img src="public/images/section4/slide_3.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Upholding Ethical Standards</h2>
                                    <p>Our culture encourages everyone to do the right thing, voice their opinions, and
                                        speak up about any concerns.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-light">
                                <div class="slider-img">
                                    <img src="public/images/section4/slide_4.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Protecting Our Planet</h2>
                                    <p>We are working toward a healthier planet with goals for 2030 and 2045, focusing on
                                        being net zero and positive for nature.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-light">
                                <div class="slider-img">
                                    <img src="public/images/section4/slide_2.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Product Governance</h2>
                                    <p>We ensure the quality, safety and uninterrupted supply of our mission of combining
                                        science, talent, and technology.</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-light">
                                <div class="slider-img">
                                    <img src="public/images/section4/slide_4.jpg" alt="">
                                </div>
                                <div class="slider-text">
                                    <h2>Improving Access for All</h2>
                                    <p>We are making our products affordable and available to more people worldwide through
                                        fair pricing and collaborations.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <!------------------------- Last Section  ------------------------->
        <div id="last-section">
            <div class="container text-end">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 m-lg-0 mt-4 d-flex justify-content-center">
                        <div class="custom-card">
                            <div class="card-body">
                                <h4 class="card-title  py-3">Quality Policy</h4>
                                <p class="card-text">We are dedicated to delivering world-class products using a stringent quality management system.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-lg-0 mt-4 d-flex justify-content-center">
                        <div class="custom-card">
                            <div class="card-body">
                                <h4 class="card-title  py-3">Manufacturing Excellence</h4>
                                <p class="card-text">Our modern facilities are equipped with the latest machinery, automated systems, and precision tools.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-lg-0 mt-4 d-flex justify-content-center">
                        <div class="custom-card">
                            <div class="card-body">
                                <h4 class="card-title  py-3">R&D</h4>
                                <p class="card-text">Our R&D team focuses on ground-breaking solutions and advanced research to produce effective medicines.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>