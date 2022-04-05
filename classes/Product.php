<?php
    class Product {
        private $name;
        private $stock;
        public function __construct($name, $stock){
            $this->name = $name;
            $this->stock = $stock;
        }

        public function GetName(){
            return $this->name;
        }
        public function GetStock(){
            return $this->stock;
        }

        public function SetName($name)
        {
            $this->name = $name;
        }
        public function SetStock($stock)
        {
            $this->stock = $stock;
        }
    
    }
?>