<!doctype html>
<html lang="en">

<head>
    <title>numina</title>
    <link rel="icon" type="image/x-icon" href="public/images/header/numina_header.png">

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- links -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="public/fonts/css/all.css">
    
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  /* font style */
  font-style: normal;
  font-weight: 500;
}

:root {
  --primary-color: #46c7e7;
  --primary-hover: rgb(67, 201, 235);
}

html,
body {
  height: 100%;
  width: auto;
}

/* ------------------------- product submenu  -------------------------- */
header {
  width: 100%;
  background-color: #fff;
  position: fixed;
  top: 0;
  z-index: 1000;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
}

.navbar .navbar-collapse .nav-link {
  margin-inline: 15px;
  color: black;
  transition: all .4s linear;
  border-radius: 8px;
  padding: 5px;
  position: relative;
}
/* .navbar .navbar-collapse .nav-link.active */
.navbar .navbar-collapse .nav-link:hover::after {
  content: '';
  position: absolute;
  width: 100%;
  height: 3px;
  background-color: var(--primary-color);
  bottom: 2px;
  left: 0;
  border-radius: 8px;
}
.active{ position: relative; }
.active::after{
content: '';
position: absolute;
width: 100%;
height: 3px;  
background-color: var(--primary-color);
bottom: 2px;
left: 0;
border-radius: 8px;
}
.navbar .logo {
  width: 12%;
}

.product-main-menu {
  width: 60%;
  display: none;
  position: absolute;
  top: 100%;
  z-index: 2;
  left: 20%;
  background-color: white;
}

.product-main-menu a {
  color: black;
  padding: 8px 0;
}

.product-main-menu .menu a:nth-child(1):hover {
  color: var(--primary-hover);
}

.product-main-menu .menu .right-arrow {
  color: var(--primary-color);
}

.product-main-menu .menu .link-hover-animation {
  background: linear-gradient(to right,
      var(--primary-hover) 0%,
      var(--primary-hover) 50%,
      transparent 50%,
      transparent 100%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition: all 0.7s ease;
}

.product-main-menu .menu .link-hover-animation:hover {
  background-position: left bottom;
  /* color: white; */
}

.product-main-menu .menu .featured-section .feature-img {
  overflow: hidden;
}

.product-main-menu .menu .featured-section .feature-img img {
  transition: all 1s linear;
}

.product-main-menu .menu .featured-section .feature-img img:hover {
  transform: scale(1.1);
}

.product-main-menu .menu .details .product-details {
  display: none;
}

/*  media query of submenu */
@media (max-width: 991.98px) {
  .product-main-menu .menu .details {
    display: none;
  }
}

/* -------------------------------------------------- Index Page start --------------------------------------------------- */
/* ----------------------------- section 1 ----------------------------- */
#hero {
  width: 100%;
  height: 100%;
  position: relative;
  margin-top: 100px !important;
}

.btn-custom {
  color: #fff;
  background-color: var(--primary-color);
  font-weight: 600;
}

.btn-custom:hover {
  color: #fff;
  /* background-color: var(--primary-hover); */
  /* box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); */
  background:  #e959a8 ;
  font-weight: 600;
}

/* .pinch-img {
  width: 100%;
  mask-image: url("../images/pinch-left-mask.svg");
  mask-size: 100%;
  mask-repeat: no-repeat;
  mask-position: center;
  transition: width 0.7s cubic-bezier(0.54, 0.09, 0.2, 0.92);
}

.pinch-img:hover {
  width: 600vh;
} */

.main-img {
  display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
    object-fit: cover;
    aspect-ratio: 14 / 12;
}

/* ----------------------------- section 2 ----------------------------- */
#section2 {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
  margin-top: 50px;
  border-radius: 16px;
}

#section2 .section2-head {
  align-items: flex-start;
  height: auto;
  padding: 180px 0 100px;
  position: relative;
}

.section2-head {
  -webkit-mask-image: linear-gradient(to bottom, #000 90%, transparent 100%);
  backdrop-filter: blur(25px);
  background-image: linear-gradient(rgba(255, 255, 255, 0),
      rgba(255, 255, 255, 0.5));
  box-sizing: border-box;
  display: flex;
  height: calc(100vh + 200px);
  left: 0;
  text-align: center;
  z-index: 1;
}

/* .bg-test::before {
  background-color: #fff;
  background-size: 100%;
  content: "";
  height: 169px;
  left: 0;
  margin: 0 auto;
  mask-image: url(../images/home/fold.svg);
  position: absolute;
  right: 0;
  top: -46px;
  transform: rotate(90deg);
  transition: all 0.2s ease;
  transition-delay: 0.2s;
  width: 80px;
  z-index: 2;
} */

.section2-main {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.section2-main video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.section2-body {
  position: relative;
  left: 0;
  margin: 0 auto;
  z-index: 2;
  /* Keep the swiper above the video */
}

.section2-body .swiper {
  width: 100%;
  height: 100%;
  /* flex-shrink: 0; */
  padding: 0 70px;
  background: transparent;
}

.section2-body .swiper-wrapper {
  transform: translate3d(0px, 0, 0);
}

.section2-body .swiper-slide {
  font-size: 18px;
  display: flex;
  justify-content: center;
  /* align-items: center; */
}

.section2-body .swiper-slide img {
  display: block;
  width: 30%;
  height: 30%;
  object-fit: cover;
}

.section2-body .swiper-horizontal>.swiper-pagination-progressbar {
  width: 40%;
  left: 30%;
  bottom: 0 !important;
  margin-top: 20px;
}

.card {
  width: 20rem;
  height: 23rem;
  position: relative;
  margin-bottom: 2rem;
  border-radius: 20px;
}

.link-footer {
  position: absolute;
  bottom: 20px;
  right: 20px;
  text-align: end;
}

.about-numina {
  width: 100%;
  margin: 5% 0;
  background-color: rgb(221, 246, 252);
  /* padding: 50px; */
  border-radius: 15px;
}
.about-numina .swiper {
  width: 100%;
  height: 100%;
}
.about-numina .swiper-slide {
  text-align: center;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}
.about-numina .swiper .medicine-card {
  width: 100%;
  height: 25rem;
  border: 1px solid rgb(113, 187, 206);
  padding: 10px;
  border-radius: 20px;
  text-align: left;
  padding: 20px;
}


/* ----------------------------- section 3 ----------------------------- */
#journey {
  position: relative;
  width: 100%;
  height: 100%;
}

.journey-body .swiper {
  width: 100%;
  height: 100%;
}

.journey-body .swiper-slide {
  font-size: 18px;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
}

.journey-body .swiper-slide .slide-img {
  overflow: hidden;
  border-radius: 15px;
}

.journey-body .swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 15px;
  object-fit: cover;
  aspect-ratio: 16 / 12;
  transition: transform 0.5s ease-in-out;
}

.journey-body .swiper-slide img:hover {
  transform: scale(1.1);
}

/* .section3-body .swiper-slide:nth-child(1n) {
  margin-top: 50px ;
}
.section3-body .swiper-slide:nth-child(2n) {
  margin-top: 0px ;
} */
.link-dark:hover {
  text-decoration: underline !important;
}

/* ----------------------------- section 4 ----------------------------- */
#comunity {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
  color: #fff;
  border-radius: 16px;
}

.comunity-head {
  position: relative;
  z-index: 2;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.comunity-main {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  /* Ensure the video stays behind */
}

.comunity-main video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  /* Ensures the video covers the entire background */
}

.comunity-body {
  position: relative;
  z-index: 2;
  /* Ensure swiper content is on top */
}

.comunity-body .swiper {
  width: 100%;
  height: 100%;
}

.comunity-body .swiper-wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 1;
  display: flex;
  transition-property: transform;
  box-sizing: content-box;
  margin-left: 10vh;
}

.comunity-body .swiper-slide {
  flex-shrink: 0;
  width: 100%;
  height: 100%;
  position: relative;
  transition-property: transform;
  border-radius: 16px;
  cursor: pointer;
  overflow: hidden;
  position: relative;
  will-change: transform;
}

.comunity-body .swiper-slide.active-slide {
  transform: scale(1.1);
}

.comunity-body .slider-img {
  /* -webkit-mask-image: url('../images/home/twist-mask.svg'); */
  -webkit-mask-position: -132px -132px;
  -webkit-mask-repeat: no-repeat;
  height: 0;
  transform: translateZ(0);
  /* transition: -webkit-mask-position 0.5s, transform 0.5s ease-in-out; */
  padding-top: 80%;
  position: relative;
}

.comunity-body .swiper-slide img {
  height: 100%;
  left: 0;
  object-fit: cover;
  position: absolute;
  top: 0;
  /* transform: translate(-50%, -50%); */
  width: 100%;
}

.comunity-body .slider-text {
  position: absolute;
  bottom: -4.5rem;
  /* Start with text hidden below the image */
  left: 0;
  width: 100%;
  height: 8rem;
  background: rgba(19, 191, 235, 0.7);
  color: white;
  text-align: center;
  padding: 10px;
  transition: bottom 0.5s ease-in-out;
}

.comunity-body .swiper-slide:hover .slider-text {
  bottom: 0;
  /* Bring text up when hovering */
}

/* ----------------------------- last-section ----------------------------- */
#policy {
  padding: 20px 0;
}

#policy .custom-card {
  /* background: var(--primary-color) linear-gradient(180deg, var(--primary-color) 0%, var(--primary-hover) 100%); */
  background-color: var(--primary-hover);
  text-align: start;
  border: 0;
  width: 100%;
  height: 100%;
  padding: 10px;
  border-radius: 15px;
  color: #fff;
}

#policy a {
  text-decoration: none;
  color: #000;
}

#lpolicy a:hover {
  text-decoration: underline;
}

/* -------------------------------------------------- Index Page end -------------------------------------------------- */

/* -------------------------------------------------- Footer start -------------------------------------------------- */
.fs-7 {
  font-size: 12.5px;
  line-height: 1.7;
}

.link-custom {
  color: var(--primary-color);
}

footer .link-dark {
  font-weight: 500;
}

footer .link-dark:hover {
  color: var(--primary-color) !important;
}
footer .logo{
  width: 10rem;
}
/* -------------------------------------------------- Footer end -------------------------------------------------- */

/* -------------------------------------------------- About us Page start --------------------------------------------------- */

.aboutus{
  margin-top: 100px;
}
.aboutus p{
    font-size: 17px;
    line-height: 24px;
  }
  .aboutus .banner{
    width: 100%;
    height: 70vh;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    margin: 5% 0;
  }
  .banner .banner-img {
    background-image: url('../images/about/digital_pharma_manufacturing.jpg');
    background-size: 100%;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
  }
  
  .top-title{
    color: black;
    font-size: 2.5rem;
  }
  .mission, .dosage-form{
    background-color: var(--primary-color);
  }
  .mission .mission-details .details .icon{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    color: var(--primary-color);
    transition: all 1s linear;
  }
  .mission .mission-details .details:hover .icon{
    background-color: var(--primary-hover);
    color: white;
  }
/* -------------------------------------------------- About us Page end --------------------------------------------------- */

/* -------------------------------------------------- Product Page start -------------------------------------------------- */
.product-us {
  margin-top: 100px;
}
.product-us .pro-img img{
  display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
    object-fit: cover;
    aspect-ratio: 14 / 12;
}
.product-us .active {
  background-color: var(--primary-hover);
  border-radius: 8px;
}

.dosage-form {
  background-color: var(--primary-color);
}

.dosage-form .dosage .img {
  width: 80px;
  height: 80px;
  /* border-radius: 100%; */
}

.dosage-form .dosage .img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.our-products .products {
  height: 100%;
  margin-bottom: 20%;
}

.our-products .products .product-categories {
  border: 1px solid var(--primary-color);
  margin: 10px;
  padding: 20px;
  border-radius: 20px;
  height: 38rem;
  overflow: hidden;
}

.our-products .products .product-categories p {
  font-size: 15px;
  text-align: left;
}

.products .swiper {
  width: 100%;
  height: 100%;
}

.products .swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: stretch;
}

.products .swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.products .swiper-pagination {
  position: relative;
  margin-top: 15px;
}

.text-container {
  max-width: 500px;
  /* You can set a max width for the container */
  /* font-family: Arial, sans-serif; */
}

.more-text {
  display: none;
  opacity: 0;
  transition: all 0.3s ease-in-out;
}

.more-text.show {
  display: block;
  opacity: 1;
}

.view-more {
  color: var(--primary-color);
  cursor: pointer;
  text-decoration: underline;
}
/* -------------------------------------------------- Product Page end --------------------------------------------------- */
/* -------------------------------------------------- Contact us page start ------------------------------------------------*/
.get-in-touch{
  margin: 8% 0;
}
.get-in-touch textarea{
  width: 100%;
}
.error{
  color: red
}
/* -------------------------------------------------- Contact us page end ------------------------------------------------*/
    </style>
</head>

<body>
    <header>
        <!----------------------------------------------Navbar-------------------------------------------------->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="index.php"><img src="public/images/header/numinaLogo.jpg"
                        class="w-100 h-inherit" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="about.php" class="nav-link fs-5 ' . $aboutActive . '"> Overview </a>
                        </li>
                        <li class="nav-item">
                            <a href="#product.php" class="nav-link fs-5 postion-relative ' . $productActive . '"
                                id="pro-submenu">
                                Our Product <i class="fa-solid fa-caret-down" id="caret-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link fs-5 ' . $careerActive . '"> Career </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact_us.php" class="nav-link fs-5 ' . $contactActive . '"> Drop us a line </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="product-main-menu container row border rouded-bottom-5 mx-auto ps-5" id="show-pro-submenu">
            <div class="menu col-lg-6 col-md-12 col-sm-12">
                <div class="details row justify-content-center align-items-center p-3">
                    <div class="product-details">
                        <h3 class="fs-4">Antacid</h3>
                        <h4 class="fs-5">Relief in 60 Secs</h4>
                        <p>Fast relief for heartburn & indigestion</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>

                    <div class="product-details">
                        <h3 class="fs-4">Antibiotics</h3>
                        <h4 class="fs-5">Solution for Every Infection</h4>
                        <p>Targeted treatments for bacterial infections.</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>

                    <div class="product-details">
                        <h3 class="fs-4">Analgesic</h3>
                        <h4 class="fs-5">Pain Relief in 30 Mins</h4>
                        <p>Fast-acting solutions to manage pain n</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>

                    <div class="product-details">
                        <h3 class="fs-4">Analgesic, Antipyretic, and Anti-emetic</h3>
                        <h4 class="fs-5">Triple Action, 1 Pill</h4>
                        <p>Pain, fever, and nausea relief in one drug</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>

                    <div class="product-details">
                        <h3 class="fs-4">Analgesic & Anti-inflammatory</h3>
                        <h4 class="fs-5">Dual Action in 45 Minutes</h4>
                        <p>Relieves pain and controls inflammation</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>

                    <div class="product-details">
                        <h3 class="fs-4">Anti-allergic</h3>
                        <h4 class="fs-5">Breathe Easy in 5 Minutes</h4>
                        <p>Rapid relief from allergy symptoms</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>

                    <div class="product-details">
                        <h3 class="fs-4">Multivitamins and Supplements</h3>
                        <h4 class="fs-5">Daily Health Boost</h4>
                        <p>Essential nutrients for overall wellness</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>

                    <div class="product-details">
                        <h3 class="fs-4">Anti-diabetics</h3>
                        <h4 class="fs-5">1 Dose, Better Control</h4>
                        <p>Effective management of blood sugar</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>

                    <div class="product-details">
                        <h3 class="fs-4">Cardiovascular Drugs</h3>
                        <h4 class="fs-5">Heart Health Matters</h4>
                        <p>Supports cardiovascular health quickly</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>

                    <div class="product-details">
                        <h3 class="fs-4">Antimicrobials</h3>
                        <h4 class="fs-5">Defend in 10 Days</h4>
                        <p>Protection against harmful microorganisms</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>

                    <div class="product-details">
                        <h3 class="fs-4">Antiretrovirals (ARVs)</h3>
                        <h4 class="fs-5">Solution for Life</h4>
                        <p>Effective management for healthier living with HIV</p>
                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid">
            <div id="section1" class="row px-lg-5 px-md-3 pe-0">
                <div class="col-lg-6 m-lg-auto">
                    <!-- <h1 class="h3">Behind the science</h1> -->
                    <div class="">
                        <h2 class="top-title">Top Pharmaceutical Manufacturing Company in India</h2>
                        <p class="fs-5 fw-normal my-5">
                            Shaping Healthier Tomorrows, Today- Delivering quality healthcare products that improve the
                            well-being of
                            millions across India and around the world.
                        </p>
                    </div>
                    <div class="">
                        <button class="btn btn-custom btn-lg">Connect with us today</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden">
                        <img src="public/images/home/openart.jpg" class="main-img" />
                        <!-- <div class="pinch-img">
                    </div> -->
                    </div>
                </div>

            </div>

            <!------------------------- Section 2 ------------------------->
            <div id="section2">
                <div class="section2-main">
                    <video src="public/images/home/respiratory-syncytial-virus-rsv-science-animation-numina.mp4"
                        autoplay muted loop></video>
                </div>
                <div class="section2-head">
                    <div class="bg-test">
                        <div class="row justify-content-center ">
                            <div class="col-lg-8 col-10">
                                <div class="text-white">
                                    <!-- <h2 class="fs-4">Our purpose</h2> -->
                                    <h2 class="fs-4">Numina Pharmaceuticals - Elevating Healthcare Excellence</h2>
                                    <span class="fs-2 fw-light">
                                        We are an eminent pharmaceutical manufacturing firm in India, offering a huge
                                        range of generic
                                        medicines to advance the healthcare and wellness of people across the globe. Our
                                        commitment to
                                        excellence is backed by a team of professionals with rich experience in
                                        pharmaceutical
                                        manufacturing, R& D and quality assurance. We have received certification from
                                        ISO, GMP quality,
                                        and WHO that reflects our commitment to meet high standards. Using our rich
                                        industry knowledge,
                                        expertise and global connections, we manufacture high-quality, effective drugs
                                        to enhance the
                                        lives of individuals dealing with different health problems. We are excited to
                                        work with top
                                        pharma brands globally and build long-lasting connections with them.
                                    </span>
                                    <p class="fs-4 fw-light mt-3">
                                        Our R&D focus is on four therapeutic areas: infectious diseases, HIV,
                                        immunology/respiratory and oncology
                                    </p>
                                </div>
                                <div class="">
                                    <button class="btn btn-lg btn-custom my-3">Reach out for collaboration</button>
                                </div>
                                <div class="">
                                    <a href="javascript:void(0);" class=" link-dark">Why invest in Numina?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section2-body">
                    <div class="swiper section2Swiper">
                        <div class="swiper-wrapper">

                            <?php
                            foreach ($product as $product) {
                                echo '
                                <div class="swiper-slide card border-0">
                                    <div class="card-body">
                                        <div class="card-title text-uppercase">' . $product->getProductTitle() . '</div>
                                        <div class="card-title display-6 link-custom">' . $product->getProductSubTitle() . '</div>
                                        <div class="card-text mb-5">' . $product->getProductShortDescription() . '</div>
                                        <div class="link-footer"><a href="javascript:void(0);" class="link-dark text-decoration-none">' . $product->getProductLink() . '</a></div>
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
                    <h2 class="top-title">See How We’re Growing</h2>
                </div>
                <div class="section3-body p-5">
                    <div class="swiper section3Swiper">
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
                <div class="section3-footer text-center">
                    <button class="btn btn-lg btn-custom">Inspired? Let’s Collaborate</button>
                </div>

            </div>

            <!------------------------- Section 4 ------------------------->
            <div id="section4">
                <div class="section4-main">
                    <video src="public/images/home/gradient-inverted.mp4" autoplay muted loop></video>
                </div>

                <div class="section4-head py-5">
                    <!-- <p class="fs-4">Life at Numina</p> -->
                    <h2 class="display-5">Creating Positive Change in Communities</h2>
                </div>

                <div class="section4-body py-5">
                    <div class="swiper section4Swiper">
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

            <!------------------------- Last Section  ------------------------->
            <div id="last-section">
                <div class="container text-end">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 m-lg-0 mt-4 d-flex justify-content-center">
                            <div class="custom-card">
                                <div class="card-body">
                                    <h4 class="card-title  py-3">Quality Policy</h4>
                                    <p class="card-text">We are dedicated to delivering world-class products using a
                                        stringent quality management system.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 m-lg-0 mt-4 d-flex justify-content-center">
                            <div class="custom-card">
                                <div class="card-body">
                                    <h4 class="card-title  py-3">Manufacturing Excellence</h4>
                                    <p class="card-text">Our modern facilities are equipped with the latest machinery,
                                        automated systems, and precision tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 m-lg-0 mt-4 d-flex justify-content-center">
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

    <script>
      // Submenu Dropdown
      var submenu_pro = document.getElementById("pro-submenu");
      var show_submenu_pro = document.getElementById("show-pro-submenu");
      var caretIcon = document.getElementById("caret-icon"); // Get the caret icon element
      // Variable to keep track of the menu visibility
      var isVisible = false;

      // Toggle the submenu on clicking the "Our product" link
      submenu_pro.addEventListener("click", function (event) {
        event.stopPropagation(); // Prevents the click from bubbling up to the document
        if (!isVisible) {
          show_submenu_pro.style.display = "flex";
          caretIcon.classList.remove("fa-caret-down"); // Remove the down caret
          caretIcon.classList.add("fa-caret-up"); // Add the up caret
          isVisible = true;
        } else {
          show_submenu_pro.style.display = "none";
          caretIcon.classList.remove("fa-caret-up"); // Remove the up caret
          caretIcon.classList.add("fa-caret-down"); // Add the down caret
          isVisible = false;
        }
      });

      // Function to hide the submenu when clicking outside of it
      document.addEventListener("click", function (event) {
        var isClickInside =
          submenu_pro.contains(event.target) ||
          show_submenu_pro.contains(event.target);

        if (!isClickInside && isVisible) {
          show_submenu_pro.style.display = "none";
          caretIcon.classList.remove("fa-caret-up"); // Remove the up caret
          caretIcon.classList.add("fa-caret-down");
          isVisible = false;
        }
      });
    </script>

    <?php include('footer.php'); ?>