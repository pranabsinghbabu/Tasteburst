<?php
session_start();

// session_destroy();
// if($_SERVER["REQUEST_METHOD"]=="POST")
// {
   if(isset($_POST['add_to_cart']))
  {
      $pname = $_POST['Item_Name'];
      $pricee= $_POST['price'];
      $qnty = 1;
      
      
      // COMMENT PORTION
      
      // $check_product = array_column($_SESSION['cart'] ,'productName');
      //           if(in_array($pname,$check_product))
      //           {
      //              echo"
      //               <script>
      //                 alert('Product already added');
      //                 window.location.href= 'Dishes.php';
      //               </script>
      //              ";

      //           }
      //           else
      //           {
                    $_SESSION['cart'][]=array('productName'=>$pname,'productPrice'=>$pricee,'productQnty'=>$qnty);
                     header("location:ViewCart.php");
                     //  print_r($_SESSION['cart']);
                }
            //  }


            // COMMENT PORTION
    
             if($count===0){
               header('location:Dishes.php');
             }
             else{
             if(isset($_POST['remove'])){
               foreach($_SESSION['cart'] as $key => $value){
                  if($value['productName'] === $_POST['item']){
                     unset($_SESSION['cart'][$key]);
                     $_SESSION['cart'] = array_values($_SESSION['cart']);
                     header('location:ViewCart.php');
                  }
               }
         }
      }


?>