<?php
    include_once('../service/ProductService.php');
    include_once('../service/ProductModel.php');
    include_once('../service/DbConnect.php');


if (!$_SESSION['login'] == true) {
    header('Location: index.php');
}

if(isset($_POST['product_insert_btn'])) {
    $title = $_POST['title'];
    $subTitle = $_POST['sub_title'];
    $shortDescription = $_POST['short_description'];
    $longDescription = $_POST['long_description'];
    $link = $_POST['link'];

    $addProduct = ProductService::ProductAdd($title, $subTitle, $shortDescription, $longDescription, $link);

    if($addProduct) {
        echo '<script>alert("Product added successfully")</script>';
    } else {
        echo '<script>alert("Failed to add product")</script>';
    }

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numina | Admin | Dashboard</title>

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
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

    <div class="container py-3">
        <div class="d-flex justify-content-between">
            <h2>Products</h2>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                + Add
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="recipient-name" class="col-form-label">Title:</label>
                                        <input name="title" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="recipient-name" class="col-form-label">Sub Title:</label>
                                        <input name="sub_title" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="recipient-name" class="col-form-label">Short Description:</label>
                                        <input name="short_description" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="recipient-name" class="col-form-label">Long Description:</label>
                                        <input name="long_description" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="recipient-name" class="col-form-label">Link:</label>
                                        <input name="link" type="text" class="form-control" id="recipient-name">
                                    </div>
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="product_insert_btn" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sr.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Link</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="py-3" scope="row">1</th>
                        <td class="py-3">Antacid</td>
                        <td class="py-3">Fast relief for heartburn & indigestion</td>
                        <td class="py-3">Relief in 60 Secs</td>
                        <td class="py-3">Go to Antacid</td>
                        <td class="py-3">
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../public/js/bootstrap.min.js"></script>
</body>

</html>