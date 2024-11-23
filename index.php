<?php

if(isset($_GET['pg'])){
    switch ($_GET['pg']) {
        case 'product':
            case 'product':
                include_once 'controllers/product.php';
            break;
        
        default:
            # code...
            break;
    }
}
    include_once "view/header.php";
    include_once "view/home.php";
    include_once "view/footer.php";
    
?>