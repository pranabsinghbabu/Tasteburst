<?php
session_start();
 if(isset($_POST['plce']))
 {
     $pname = $_POST['namee'];
     $pricee= $_POST['pprice'];

     
     
     
                   $_SESSION['s'][]=array('productName'=>$pname,'productPrice'=>$pricee);
                   print_r($_SESSION['s']);
                    header("location:../Order Details/OrderDetails.php");
                    //  print_r($_SESSION['cart']);
               }
?>