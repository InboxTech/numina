<?php
class header
{
    public function includeHeader($title, $path,)
    {
        echo '<!doctype html>
<html lang="en">

<head>
    <title>' . $title . '</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- links -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="' . $path . 'public/css/bootstrap.min.css">
    <link rel="stylesheet" href="' . $path . 'public/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="' . $path . 'public/font/css/all.min.css">
    <!-- <link rel="stylesheet" href="' . $path . 'public/fonts/tabler-icons.css"> -->
    <link rel="stylesheet" href="' . $path . 'public/css/style.css">

</head>

<body>
    <header>
       <!----------------------------------------------Navbar-------------------------------------------------->
        
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="#"><img src="public/images/header/Numina Logo.png"
                        class="w-100 h-inherit" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="aboutus.html" class="nav-link fs-5"> Who is Numina </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link fs-5 postion-relative" id="pro-submenu">
                                Our product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link fs-5">
                                Reasearch and development
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link fs-5"> F & Q </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link fs-5"> Drop us a line </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="product-main-menu container row border rouded-bottom-5 mx-auto ps-5" id="show-pro-submenu">
            <div class="menu col-lg-6 col-md-12 col-sm-12 border-lg-end p-3 row flex-column">
                <a href="#" class="text-decoration-none fw-bold mb-3 fs-3 link-orange">
                    Product <span class="fs-2 right-arrow"> &#8594; </span>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Antacid <i class="fa-solid fa-angle-right"></i>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Antibiotic <i class="fa-solid fa-angle-right"></i>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Analgesic <i class="fa-solid fa-angle-right"></i>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Analgesic, Antipyretic and Anti-emetic
                    <i class="fa-solid fa-angle-right"></i>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Analgesic & Anti-inflammatory
                    <i class="fa-solid fa-angle-right"></i>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Anti-allergic <i class="fa-solid fa-angle-right"></i>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Multivitamins and Supplements
                    <i class="fa-solid fa-angle-right"></i>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Anti-diabetic <i class="fa-solid fa-angle-right"></i>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Cardiovascular Drugs <i class="fa-solid fa-angle-right"></i>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Antimicrobials <i class="fa-solid fa-angle-right"></i>
                </a>
                <a href="#" class="text-decoration-none link-hover-animation">
                    Antiretrovirals(ARVs) <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

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
    </header>';
    }
}
