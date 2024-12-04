<?php

    class ProductService{

        public static $msg = '';

        public static function ProductAdd($title, $subTitle, $shortDescription, $longDescription, $link){
            $db = new DbConnect();
            $conn = $db->getConnection();

            $productInsertSql = "INSERT INTO product (`title`, `sub_title`, `short_description`, `long_description`, `link`, `created_at`, `updated_at`)
            VALUES ('$title', '$subTitle', '$shortDescription', '$longDescription',  '$link', current_time(),current_time())";
            $resultProdcutInsert = mysqli_query($conn, $productInsertSql);

            if($resultProdcutInsert) {
                return ProductService::$msg = 'Success: Inserted Product!';
                return true;            
            } else { 
                return ProductService::$msg = 'Error: Failed to Inserted Product!';
                return false;
            }
        }

        public static function getAllProducts(){
            $productArray = array();

            $db = new DbConnect();
            $conn = $db->getConnection();

            $productSelectSql = "SELECT * FROM product";
            $resultProductSelect = mysqli_query($conn, $productSelectSql);

            if($resultProductSelect)

            while($row = mysqli_fetch_array($resultProductSelect)) {

                $product = new ProductModel();
                $product->setProductId($row['id']);
                $product->setProductTitle($row['title']);
                $product->setProductSubTitle($row['sub_title']);
                $product->setProductShortDescription($row['short_description']);
                $product->setProductLongDescription($row['long_description']);
                $product->setProductLink($row['link']);

                array_push($productArray,$product);
            }
            return $productArray;
            
        }

        public static function getAllProductsById($id){
            $productArray = array();

            $db = new DbConnect();
            $conn = $db->getConnection();

            $productSelectSql = "SELECT * FROM product WHERE id='$id'";
            $resultProductSelect = mysqli_query($conn, $productSelectSql);

            if($resultProductSelect)

            while($row = mysqli_fetch_array($resultProductSelect)) {

                $product = new ProductModel();
                $product->setProductId($row['id']);
                $product->setProductTitle($row['title']);
                $product->setProductSubTitle($row['sub_title']);
                $product->setProductShortDescription($row['short_description']);
                $product->setProductLongDescription($row['long_description']);
                $product->setProductLink($row['link']);

                array_push($productArray,$product);
            }
            return $productArray;   
        }

        public static function ProductUpdate($id, $title, $subTitle, $shortDescription, $longDescription, $link){
            $db = new DbConnect();
            $conn = $db->getConnection();

            $productUpdateSql = "UPDATE `product` SET title = '$title', sub_title = '$subTitle', short_description = '$shortDescription', long_description = '$longDescription', link = '$link', updated_at = CURRENT_TIMESTAMP() WHERE id = '$id'";
            $resultProdcutUpdate = mysqli_query($conn, $productUpdateSql);

            if($resultProdcutUpdate){
                return ProductService::$msg = 'Success: Update Product!';
                return true;
            }else{
                return ProductService::$msg = 'Error: Failed to Update Product!';
                return true;
            }
        }

        public static function ProductDelete($id){
            $db = new DbConnect();
            $conn = $db->getConnection();

            $productDeleteSql = "DELETE FROM product WHERE id = '$id'";
            $resultProdcutDelete = mysqli_query($conn, $productDeleteSql);

            if($resultProdcutDelete){
                return ProductService::$msg = 'Success: Delete Product!';
                return true;
            }else{
                return ProductService::$msg = 'Error: Failed to Delete Product!';
                return true;
            }
        }
    }

?>