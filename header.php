<?php
    class header {
        public function includeHeader($title,$path,){
            echo '<!doctype html>
<html lang="en">

<head>
    <title>'.$title.'</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- links -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="'.$path.'public/css/bootstrap.min.css">
    <link rel="stylesheet" href="'.$path.'public/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="'.$path.'public/font/css/all.min.css">
    <!-- <link rel="stylesheet" href="'.$path.'public/fonts/tabler-icons.css"> -->
    <link rel="stylesheet" href="'.$path.'public/css/style.css">

</head>

<body>
    <header>
        <div class="header container-fluid bg-black text-end p-2">
            <a href="#" class="text-decoration-none fs-5 border-end pe-3 orange-link">
                <i class="fa-regular fa-envelope"></i> Contact us
            </a>
            <a href="#" class="text-decoration-none fs-5 ms-3 orange-link">
                <i class="fa-solid fa-magnifying-glass"></i> Search
            </a>
        </div>

        <!----------------------------------------------Navbar-------------------------------------------------->

        <nav class="navbar row border-bottom">
            <div class="logo col-6">
                <img src="public/images/header/Numina Logo.png" class="w-100 h-inherit" alt="" />
            </div>
            <div class="nav-links col-6">
                <a href="#" class="text-decoration-none fs-5"> Who is Numina </a>
                <a href="#" class="text-decoration-none fs-5" id="pro-submenu">
                    Our product
                </a>
                <a href="#" class="text-decoration-none fs-5">
                    Reasearch and development
                </a>
                <a href="#" class="text-decoration-none fs-5"> F & Q </a>
                <a href="#" class="text-decoration-none fs-5"> Drop us a line </a>
            </div>
        </nav>
        <div class="product-main-menu border rounded-top-0 rouded-bottom-5 p-5 container mx-auto row justify-content-evenly"
            id="show-pro-submenu">
            <div class="menu border-end col-4 row flex-column">
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

            <!-- <div class="menu border-end ps-5 col-4 postion-relative">
                <div class="d-none row flex-column" id="show-antibiotic-submenu">
                    <a href="#" class="text-decoration-none fw-bold mb-3 fs-3 link-orange"> Outstanding people <span class="fs-2 right-arrow"> &#8594; </span> </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> AZITHROMYCIN TABLETS	 </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> CEFUROXIME AXETIL TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> CEFIXIME  TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation">	CEFIXIME  + OFLOXACIN TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> CEFIXIME  + POTASSIUM CLAVULANATE TABLETS  </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> CEPHALEXIN TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> AMOXYCILLIN TRIHYDRATE TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> AMOXYCILLIN TRIHYDRATE  + POTASSIUM CLAVULANATE TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> ETORICOXIB TAB LETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> LEVOFLOXACIN HEMIHYDRATE TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> AMPICILLIN TRIHYDRATE  + DICLOXACILLIN SODIUM TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> 	DOXYCYCLINE HYCLATE TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> LINEZOLID TABLETS  </a>
                </div>

                <div class="d-none row flex-column" id="show-anl-antipy-antiem-submenu">
                    <a href="#" class="text-decoration-none fw-bold mb-3 fs-3 link-orange"> Outstanding people <span class="fs-2 right-arrow"> &#8594; </span> </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> PARACETAMOL + DOMPERIDONE MALEATE TABLETS	 </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> ACECLOFENAC & PARACETAMOL TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> ACECLOFENAC, PARACETAMOL & CHLORZOXAZONE TABLETS	</a>
                    <a href="#" class="text-decoration-none link-hover-animation"> ACECLOFENAC, PARACETAMOL & SERRATIOPEPTIDASE TABLETS	</a>
                    <a href="#" class="text-decoration-none link-hover-animation"> DICLOFENAC & PARACETAMOL TABLETS	  </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> DICLOFENAC POTASSIUM, PARACETAMOL, CHLORPHENIRAMINE MALEATE & MAGNESIUM TRISILICATE TABLETS	 </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> DICLOFENAC SODI. PARACETAMOL & CHLORZOXAZONE TABLETS	 </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> 	DICLOFENAC, PARACETAMOL AND SERATIOPEPTIDASE TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> DICLOFENAC, PARACETAMOL, MAGNISUM TRISILICATE TABLETS </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> NIMESULIDE & PARACETAMOL TABLETS	 </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> 	PARACETAMOL, DICLOFENAC & CHLORZOXAZONE TABLETS	 </a>
                    
                </div>

                <div class="governance-submenu d-none row flex-column" id="show-gov-submenu">
                    <a href="#" class="text-decoration-none fw-bold mb-3 fs-3 link-orange"> Governance <span class="fs-2 right-arrow"> &#8594; </span> </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> Committees </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> Shareholders  </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> Sarbanes-Oxley Act 20002 </a>
                    <a href="#" class="text-decoration-none link-hover-animation"> Compliance </a>
                </div>
            </div> -->

            <div class="menu col-4">
                <div class="featured-section">
                    <a href="#" class="text-decoration-none">
                        <span class="text-uppercase"> featured section </span>
                        <h3 class="fs-4 fw-light">Our purpose, strategy and culture</h3>

                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/gsk_tech_human_image_6k.jpg"
                                class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </a>
                </div>

                <div class="featured-section my-3">
                    <a href="#" class="text-decoration-none">
                        <span class="text-uppercase"> featured section </span>
                        <h3 class="fs-4 fw-light">Outstanding people</h3>

                        <div class="feature-img w-75 rounded-4">
                            <img src="public/images/header/sddefault-2.jpg" class="w-100 h-inherit rounded-4" alt="" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>';
        }
    }
?>