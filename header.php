<?php
class header
{
    public function includeHeader($title, $path, $url)
    {
        $aboutActive = '';
        $productActive = '';
        $contactActive = '';
        $careerActive = '';
        $investortActive='' ;

        if ($url == "about.php") {
            $aboutActive = 'active';
        } else if ($url == "product.php") {
            $productActive = 'active';
        } else if ($url == "contact_us.php") {
            $contactActive = 'active';
        }else if ($url == "investor.php") {
            $investortActive = 'active';
        } 
         else if ($url == "career.php") {
            $careerActive = 'active';
        }
        echo '
            <!doctype html>
                <html lang="en">

                <head>
                    <title>' . $title . '</title>
                    <link rel="icon" type="image/x-icon" href="public/images/header/numinafav.png">

                    <!-- Required meta tags -->
                    <meta charset="utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                    <!-- links -->
                    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap">
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"> -->
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
                    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
                    <link rel="stylesheet" href="' . $path . 'public/css/bootstrap.min.css">
                    <link rel="stylesheet" href="' . $path . 'public/css/swiper-bundle.min.css" />
                    <link rel="stylesheet" href="' . $path . 'public/fonts/css/all.css">
                    <link rel="stylesheet" href="' . $path . 'public/css/style.css">
                </head>

                <body>
                    <header>
                        <!----------------------------------------------Navbar-------------------------------------------------->
                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">
                                <a class="navbar-brand logo" href="index.php"><img src="public/images/header/numinaLogo.jpeg"
                                    class="w-100 h-inherit" alt="" /></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a href="about.php" class="nav-link  ' . $aboutActive . '"> About Us </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="#" class="nav-link  "> Business </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link  "> Capabilities  </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="investor.php" class="nav-link '.$investortActive. '  "> Investors </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="#" class="nav-link  "> Sustainability </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="product.php" class="nav-link  postion-relative ' . $productActive . '" id="pro-submenu">
                                                Our Product
                                                <!-- <i class="fa-solid fa-caret-down" id="caret-icon"></i> -->
                                            </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="#" class="nav-link  "> Media  </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact_us.php" class="nav-link  ' . $careerActive . '"> Career </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact_us.php" class="nav-link  ' . $contactActive . '"> Contact </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </header>
        ';
    }
}
