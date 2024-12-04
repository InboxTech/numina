<?php
include_once('../service/ProductService.php');
include_once('../service/ProductModel.php');
include_once('../service/DbConnect.php');

include_once("header.php");

$header = new AdminHeader();
$header->includeAdminHeader('Numina | Admin | Product', '../');

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

if (isset($_POST['delete_btn'])) {
    $id = $_POST['id'];

    $deleteProduct = ProductService::ProductDelete($id);
}
?>

<!---------------------------------------- Main ---------------------------------------->
<main>
    <div class="container py-3">
        <!-------------------- Header -------------------->
        <?php
        if (strlen(ProductService::$msg) > 0) {
            $alertType = strpos(ProductService::$msg, 'Success:') === 0 ? 'success' : 'danger';
            echo '
                <div class="alert alert-' . $alertType . ' alert-dismissible fade show" role="alert" id="autoCloseAlert">
                    ' . ProductService::$msg . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
        }
        ?>

        <!-- Add product -->
        <div class="d-flex justify-content-between">
            <h2>Products</h2>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
                <i class="fa-solid fa-plus"></i> Add
            </button>

            <!-- Add product Modal -->
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
        <div class="row overflow-x-auto">
            <table class="table">
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
                <tbody>

                    <!-- Fetching data from the database -->
                    <?php
                        $products = ProductService::getAllProducts();
                        $i = 1;
                        foreach ($products as $product) {
                            echo '
                                <tr>
                                    <th class="py-3" scope="row">' . $i++ . '</th>
                                    <td class="py-3">' . $product->getProductTitle() . '</td>
                                    <td class="py-3">' . $product->getProductSubTitle() . '</td>
                                    <td class="py-3">' . $product->getProductShortDescription() . '</td>
                                    <td class="py-3">' . $product->getProductLongDescription() . '</td>
                                    <td class="py-3">' . $product->getProductLink() . '</td>
                                    <!-- <td class="py-3 d-flex ">
                                        <input type="hidden" name="id" value="' . $product->getProductId() . '">
                                        <button type="button" data-id="' . $product->getProductId() . '" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#editProduct_' . $product->getProductId() . '">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                        </button>
                                        <button type="button" data-id="' . $product->getProductId() . '" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Product_Delete_' . $product->getProductId() . '">
                                            <i class="fa-solid fa-trash"></i> Delete
                                        </button>
                                    </td> -->
                                    <td class="py-3">
                                        <div class="d-flex">
                                            <input type="hidden" name="id" value="' . $product->getProductId() . '">
                                            <button type="button" data-id="' . $product->getProductId() . '" class="btn btn-primary me-2 btn-custom" data-bs-toggle="modal" data-bs-target="#editProduct_' . $product->getProductId() . '">
                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                            </button>
                                            <button type="button" data-id="' . $product->getProductId() . '" class="btn btn-danger btn-custom" data-bs-toggle="modal" data-bs-target="#Product_Delete_' . $product->getProductId() . '">
                                                <i class="fa-solid fa-trash"></i> Delete
                                            </button>
                                        </div>
                                    </td>

                                </tr>

                                <!-- Modal for Edit a product -->
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
                                
                                <!-- Modal for deleting a product -->
                                <div class="modal fade" id="Product_Delete_' . $product->getProductId() . '"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="editProductLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delet Product ' . $product->getProductId() . '</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <i class="fa-regular fa-circle-xmark display-1 text-danger"></i>
                                                <p class="mt-3">Are you sure you want to delete  <strong>' . $product->getProductTitle() . '</strong> product?</p>
                                                <form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="post">
                                                    <input type="hidden" name="id" value="' . $product->getProductId() . '">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="delete_btn" class="btn btn-sm btn-danger">
                                                        <i class="fa-solid fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include_once("footer.php");?>