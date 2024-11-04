<?php
include_once('../service/ProductService.php');
include_once('../service/ProductModel.php');
include_once('../service/DbConnect.php');


if (!$_SESSION['login'] == true) {
    header('Location: index.php');
}

if (isset($_POST['product_insert_btn'])) {
    $title = $_POST['title'];
    $subTitle = $_POST['sub_title'];
    $shortDescription = $_POST['short_description'];
    $longDescription = $_POST['long_description'];
    $link = $_POST['link'];

    $addProduct = ProductService::ProductAdd($title, $subTitle, $shortDescription, $longDescription, $link);
}

if (isset($_POST['update_btn'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $subTitle = $_POST['sub_title'];
    $shortDescription = $_POST['short_description'];
    $longDescription = $_POST['long_description'];
    $link = $_POST['link'];

    $updateProduct = ProductService::ProductUpdate($id, $title, $subTitle, $shortDescription, $longDescription, $link);
}

if(isset($_POST['delete_btn'])){
    $id = $_POST['id'];

    $deleteProduct = ProductService::ProductDelete($id);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numina | Admin | Dashboard</title>

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome-free-6.6.0-web/css/all.css">
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

    <!---------------------------------------- Main ---------------------------------------->
    <main>
        <div class="container py-3">
            <!-------------------- Header -------------------->
            <?php
                if (strlen(ProductService::$msg) > 0) {
                    echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ' . ProductService::$msg . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ';
                } else {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            ' . ProductService::$msg . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ';
                }
            ?>
            <div class="d-flex justify-content-between">
                <h2>Products</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
                    <i class="fa-solid fa-plus"></i> Add
                </button>

                <!-- Modal -->
                <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-3 col-6">
                                            <label for="recipient-name" class="col-form-label">Title:</label>
                                            <input name="title" type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="recipient-name" class="col-form-label">Sub Title:</label>
                                            <input name="sub_title" type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="recipient-name" class="col-form-label">Short Description:</label>
                                            <input name="short_description" type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="recipient-name" class="col-form-label">Long Description:</label>
                                            <input name="long_description" type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="recipient-name" class="col-form-label">Link:</label>
                                            <input name="link" type="text" class="form-control" id="recipient-name" required>
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

            <!-------------------- Body -------------------->
            <div class="row">
                <!-- <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sr.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Sub Title</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Long Description</th>
                            <th scope="col">Link</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody> -->
                <!-- Fetching data from the database -->
                <?php

                $products = ProductService::getAllProducts();
                $i = 1;
                foreach ($products as $product) {
                    echo '
                        <!--
                            <tr>
                                <th class="py-3" scope="row">' . $i++ . '</th>
                                <td class="py-3">' . $product->getProductTitle() . '</td>
                                <td class="py-3">' . $product->getProductSubTitle() . '</td>
                                <td class="py-3">' . $product->getProductShortDescription() . '</td>
                                <td class="py-3">' . $product->getProductLongDescription() . '</td>
                                <td class="py-3">' . $product->getProductLink() . '</td>
                                <td class="py-3">
                                    <input type="hidden" name="id" value="' . $product->getProductId() . '">
                                    <button type="button" data-id="' . $product->getProductId() . '" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#editProduct_' . $product->getProductId() . '">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                    </button>
                                    <form action="'. htmlspecialchars($_SERVER['PHP_SELF']) .'" method="post">

                                        <button type="submit" name="delete_btn" class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        -->

                        <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">' . $product->getProductTitle() . '</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">' . $product->getProductSubTitle() . '</h6>
                            <p class="card-text">' . $product->getProductShortDescription() . '</p>
                            <p class="card-text">' . $product->getProductLongDescription() . '</p>
                            <a href="#" class="card-link">' . $product->getProductLink() . '</a>
                            <div>
                                <input type="hidden" name="id" value="' . $product->getProductId() . '">
                                <button type="button" data-id="' . $product->getProductId() . '" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#editProduct_' . $product->getProductId() . '">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </button>
                                <form action="'. htmlspecialchars($_SERVER['PHP_SELF']) .'" method="post">
                                    <input type="hidden" name="id" value="' . $product->getProductId() . '">
                                    <button type="submit" name="delete_btn" class="btn btn-sm btn-danger">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        </div>
                        <div class="modal fade" id="editProduct_' . $product->getProductId() . '" tabindex="-1" aria-labelledby="editProductLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Product ' . $product->getProductId() . '</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label class="col-form-label">Title:</label>
                                                    <input name="title" type="text" class="form-control"  value="' . $product->getProductTitle() . '" required>
                                                </div>
                                                <div class="mb-3 col-6">
                                                    <label class="col-form-label">Sub Title:</label>
                                                    <input name="sub_title" type="text" class="form-control" value="' . $product->getProductSubTitle() . '" required>
                                                </div>
                                                <div class="mb-3 col-6">
                                                    <label class="col-form-label">Short Description:</label>
                                                    <input name="short_description" type="text" class="form-control" value="' . $product->getProductShortDescription() . '" required>
                                                </div>
                                                <div class="mb-3 col-6">
                                                    <label class="col-form-label">Long Description:</label>
                                                    <input name="long_description" type="text" class="form-control" value="' . $product->getProductLongDescription() . '" required>
                                                </div>
                                                <div class="mb-3 col-6">
                                                    <label class="col-form-label">Link:</label>
                                                    <input name="link" type="text" class="form-control" value="' . $product->getProductLink() . '" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="id" value="' . $product->getProductId() . '">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="update_btn" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                }
                ?>
                <!-- </tbody>
                </table> -->
            </div>
        </div>
    </main>
    <div class="modal fade" id="editProduct" tabindex="-1" aria-labelledby="editProductLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Product <?php $id ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <input type="text" name="id" value="<?php echo  $product->getProductId() ?>">


                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="recipient-name" class="col-form-label">Title:</label>
                                <input name="title" type="text" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="recipient-name" class="col-form-label">Sub Title:</label>
                                <input name="sub_title" type="text" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="recipient-name" class="col-form-label">Short Description:</label>
                                <input name="short_description" type="text" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="recipient-name" class="col-form-label">Long Description:</label>
                                <input name="long_description" type="text" class="form-control" id="recipient-name" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="recipient-name" class="col-form-label">Link:</label>
                                <input name="link" type="text" class="form-control" id="recipient-name" required>
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
    <footer>
        <script src="../public/js/bootstrap.min.js"></script>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.btn-primary[data-bs-toggle="modal"]');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Get the data-id attribute from the button
                    const productId = this.getAttribute('data-id');

                    // Set the value in the hidden input field in the modal
                    document.getElementById('productId').value = productId;

                    // Optionally, update the modal title or other fields if needed
                    document.getElementById('editProductLabel').textContent = 'Edit Product ' + productId;
                });
            });
        });
    </script>
</body>

</html>