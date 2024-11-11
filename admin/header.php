<?php
class AdminHeader{
    public function includeAdminHeader($title, $path,){
        echo '
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'. $title .'</title>

                <link rel="stylesheet" href="'. $path .'public/css/bootstrap.min.css">
                <link rel="stylesheet" href="'. $path .'public/fontawesome-free-6.6.0-web/css/all.css">
                <style>
                    #autoCloseAlert {
                        position: fixed;
                        width: 70%;
                        top: 20px;
                        left: 50%;
                        transform: translateX(-50%);
                        z-index: 10;
                    }
                    
                    .btn-custom {
                        height: 40px;
                        width: 90px;
                        font-size: 14px;
                        margin-right: 10px;
                    }

                </style>
            </head>

            <body>
                <!-------------------- Nav-bar -------------------->
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="#">Numina</a>
                        <button
                            class="navbar-toggler d-lg-none"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapsibleNavId"
                            aria-controls="collapsibleNavId"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <!-- <li class="nav-item">
                                    <a class="nav-link active" href="#" aria-current="page">Home
                                        <span class="visually-hidden">(current)</span></a>
                                </li>-->
                                <li class="nav-item">
                                    <a class="btn btn-danger" href="logout.php">Logout</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        id="dropdownId"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">Profile</a>
                                    <div
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownId">
                                        <a class="dropdown-item" href="#">Action 1</a>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </nav>
        ';
    }
}
