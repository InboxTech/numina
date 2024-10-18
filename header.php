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
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg bg-body-light pt-0 flex-column">
                <div class="container-fluid bg-black">
                    <div class="navbar-brand">
                        <a class="text-decoration-none link-light" href="#">
                            Global | Numina
                        </a>
                    </div>
                    <button class=" navbar-toggler text-bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ms-auto navbar-toggler-icon text-light"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link link-light active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="vr text-light h-100"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <div class="vr text-light h-100"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    </div>
                    
                </div>
            <div class="container-fluid border-bottom">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <a class="navbar-brand" href="#">
                        <img src="./public/images/Numina_Logo.png" alt="logo">
                    </a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="vr h-100"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <div class="vr h-100"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr/>
        </nav>
    </header>';
        }
    }
?>