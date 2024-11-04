<?php
    class ProductModel {

        private $id;
        private $title;
        private $subtitle;
        private $ShortDescription;
        private $LongDescription;
        private $link;

        public function setProductId($id) {
            return $this->id = $id;
        }

        public function getProductId() {
            return $this->id;
        }


        public function setProductTitle($title) {
            return $this->title = $title;
        }

        public function getProductTitle() {
            return $this->title;
        }


        public function setProductSubTitle($subtitle) {
            return $this->subtitle = $subtitle;
        }

        public function getProductSubTitle() {
            return $this->subtitle;
        }
        public function setProductShortDescription($ShortDescription) {
            return $this->ShortDescription = $ShortDescription;
        }

        public function getProductShortDescription() {
            return $this->ShortDescription;
        }

        public function setProductLongDescription($LongDescription) {
            return $this->LongDescription = $LongDescription;
        }


        public function getProductLongDescription() {
            return $this->LongDescription;
        }
        public function setProductLink($link) {
            return $this->link = $link;
        }

        public function getProductLink() {
            return $this->link;
        }
    }
?>