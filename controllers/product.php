<?php
     if(isset($_GET['aciton'])){
          switch ($_GET['aciton']) {
            case 'shop':
                # code...
                break;
            case 'detail':
                # code...
                break;
            default:
                # code...
                break;
          }
     }else{
        header('location: ../index.php')
     }
?>