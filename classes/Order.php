<?php
    class Order{
        public function restar($product){
            $stock=$product->GetStock()-1;
            $product->SetStock($stock);
        }
    }
?>