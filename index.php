<?php
include_once('header.php');
$header = new Header();
$header->includeHeader('GSK | Home', './'); ?>

<main>
    <div class="container-fluid">
        <div id="page1" class="row p-0 m-0 ps-5">
            <div class="col-lg-6 m-lg-auto">
                <h1 class="h3">Behind the science</h1>
                <div class="">
                    <h2 class="display-1">Meningitis cases continue to rebound post-pandemic</h2>
                    <p class="fs-4">
                        Scientific advances have helped reduce meningitis rates globally – but the need for awareness and innovation regarding prevention strategies continues.
                        Here, one teenage patient tells her story – and what she wants others like her to know about the disease.
                    </p>
                </div>
                <div class="">
                    <button class="btn btn-orange btn-lg">Read our article on meningitis</button>
                </div>
            </div>
            <div class="col-lg-6 overflow-hidden">
                <div class="pinch-img">
                    <img src="public/images/home-1.jpg" class="main-img" />
                    <!-- <img src="public/images/pinch-left-mask.svg" class="main-img"/>  -->
                </div>
            </div>

        </div>

        <!------------------------- Section 2 ------------------------->
        <div id="section2">
            <div class="section2-head">
                <div class="bg-test">
                    <div class="row justify-content-center ">
                        <div class="col-8">
                            <div class="">
                                <h2 class="fs-4">Our purpose</h2>
                                <span class="fs-2 fw-light">
                                    We are a focused biopharma company with strong momentum and big ambitions, to unite science,
                                    technology and talent to get ahead of disease together. We aim to positively impact the health of 2.5
                                    billion people by the end of the decade, as a successful, growing company where people can thrive.
                                </span>
                                <p class="fs-4 fw-light mt-3">
                                    Our R&D focus is on four therapeutic areas: infectious diseases, HIV, immunology/respiratory and oncology
                                </p>
                            </div>
                            <div class="">
                                <button class="btn btn-lg btn-orange my-3">Purpose, strategy and culture</button>
                            </div>
                            <div class="">
                                <a href="#" class=" link-dark">Why invest in GSK?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section2-body">
                <div class="swiper section2Swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card border-0">
                            <div class="card-body">
                                <div class="card-title text-uppercase">Infectious diseases</div>
                                <div class="card-title urbanist fs-25 link-orange">1 in 6</div>
                                <div class="card-text mb-5">deaths globally caused by infectious disease</div>
                                <div class="link-footer"><a href="#" class="link-dark text-decoration-none">Go to infectious diseases</a></div>
                            </div>

                        </div>
                        <div class="swiper-slide card border-0">
                            <div class="card-body w-100">
                                <div class="card-title text-uppercase">HIV</div>
                                <div class="card-title urbanist fs-25 link-orange">39m</div>
                                <div class="card-text mb-5">people living with HIV globally</div>
                                <div class="link-footer"><a href="#" class="link-dark text-decoration-none">Go to HIV</a></div>
                            </div>
                        </div>
                        <div class="swiper-slide card border-0">
                            <div class="card-body">
                                <div class="card-title text-uppercase">Respiratory/Immunology</div>
                                <div class="card-title urbanist fs-25 link-orange">50yrs</div>
                                <div class="card-text mb-5">of leading research to help people with respiratory and inflammatory conditions</div>
                                <div class="link-footer"><a href="#" class="link-dark text-decoration-none">Go to respiratory/immunology</a></div>
                            </div>
                        </div>
                        <div class="swiper-slide card border-0">
                            <div class="card-body">
                                <div class="card-title text-uppercase">Oncology</div>
                                <div class="card-title urbanist fs-25 link-orange">~10m</div>
                                <div class="card-text mb-5">people died from cancer in 2020, making it a leading cause of death worldwide</div>
                                <div class="link-footer"><a href="#" class="link-dark text-decoration-none">Go to oncology</a></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="section2-main">
                <video src="public/images/respiratory-syncytial-virus-rsv-science-animation-16x9-gskcom-only.mp4" autoplay muted loop></video>
            </div>
        </div>

        <!------------------------- Section 3 ------------------------->
        <div id="section3" class="py-lg-5">
            <div class="section3-header text-center py-3">
                <p>Behind the science</p>
                <h2>Discover how we're getting ahead</h2>
            </div>
            <div class="section3-body p-5">
                <div class="swiper section3Swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <div>
                                    <img src="public/images/section3/slide_1.jpg" alt="">
                                </div>
                                <div>
                                    <p>‘This could be a golden moment’: Is prevention the ‘medicine’ we need to end the HIV epidemic?</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <div>
                                    <img src="public/images/section3/slide_2.jpg" alt="">
                                </div>
                                <div>
                                    <p>Remission could be possible for people with asthma, giving them a new outlook on life</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <div>
                                    <img src="public/images/section3/slide_3.jpg" alt="">
                                </div>
                                <div>
                                    <p>‘We’ve seen an explosion in computing power’: Using AI, machine learning and data to unlock the mysteries of disease</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <div>
                                    <img src="public/images/section3/slide_4.jpg" alt="">
                                </div>
                                <div>
                                    <p>‘Patients can breathe easier today’: Scientific advances in asthma and COPD care could prevent irreversible lung damage</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <div>
                                    <img src="public/images/section3/slide_5.jpg" alt="">
                                </div>
                                <div>
                                    <p>Advanced technology is increasing the chances of improving outcomes for cancer patients</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <div>
                                    <img src="public/images/section3/slide_6.jpg" alt="">
                                </div>
                                <div>
                                    <p>Robots, AI, and machine learning: how smart manufacturing is getting medicines and vaccines from factories to patients faster</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="section3-footer text-center">
                <button class="btn btn-lg btn-orange">Read our magazine</button>
            </div>

        </div>

        <!------------------------- Section 4 ------------------------->
        <div id="section4 " class="py-5">
            <div class="section4-head py-5 text-center">
                <p class="fs-4">Life at GSK</p>
                <h2 class="display-5">How we help people thrive </h2>
            </div>
            <div class="section4-body py-5">
                <div class="swiper section4Swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <div class="position-relative">
                                    <img src="public/images/section4/slide_1.jpg" alt="">
                                </div>
                                <div class="position-absolute bottom-0 z-2">
                                    <p>Culture</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <div>
                                    <img src="public/images/section4/slide_2.jpg" alt="">
                                </div>
                                <div>
                                    <p>Remission could be possible for people with asthma, giving them a new outlook on life</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <div>
                                    <img src="public/images/section4/slide_3.jpg" alt="">
                                </div>
                                <div>
                                    <p>‘We’ve seen an explosion in computing power’: Using AI, machine learning and data to unlock the mysteries of disease</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="text-decoration-none link-dark">
                                <div>
                                    <img src="public/images/section4/slide_4.jpg" alt="">
                                </div>
                                <div>
                                    <p>‘Patients can breathe easier today’: Scientific advances in asthma and COPD care could prevent irreversible lung damage</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="section4-main">
                <video src="public/images/gradient-inverted.mp4" autoplay muted loop></video>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>