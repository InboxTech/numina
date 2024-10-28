<?
    class ProductModel {

        private $title;


        public function setProductTtitle($title) {
            return $this->$title = $title;
        }


        public function getProductTtitle() {
            return $this->title;
        }
    }
?>