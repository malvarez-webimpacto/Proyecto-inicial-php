<?php
    include 'classes/Order.php';
    include 'classes/Product.php';
    
    $newproduct = new Product("zapatillas", 25);
    $neworder = new Order();
    $neworder->restar($newproduct);
    echo 'El Producto '.$newproduct->GetName().' tiene stock  ' .$newproduct->GetStock();
?>