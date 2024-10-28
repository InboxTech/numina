<?php

    class ProductService{
        public static function ProductAdd($title, $subTitle, $shortDescription, $longDescription, $link){
            $db = new DbConnect();
            $conn = $db->getConnection();

            $productInsertSql = "INSERT INTO product (`title`, `sub_title`, `short_description`, `long_description`, `link`, `created_at`, `updated_at`)
            VALUES ('$title', '$subTitle', '$shortDescription', '$longDescription',  '$link', current_time(),current_time())";
            $resultProdcutInsert = mysqli_query($conn, $productInsertSql);

            if($resultProdcutInsert) {
                return true;
            } else { 
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
                $product->getProductTitle($row['title']);

            }
            
        }


    }

?>