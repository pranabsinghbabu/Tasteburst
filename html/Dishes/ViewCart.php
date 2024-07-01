<?php
      session_start();
    //   $user = $_SESSION['user_name'];
    //   if($user){

    //   }
    //   else{
    //     session_destroy();
    //   }
    //   session_destroy();
    $count=0;
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}
    if($count === 0){
        header('location:Dishes.php');
        // alert()
    }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2ca0a3c5a3.js" crossorigin="anonymous"></script>
    <style>
         * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, segoe ui, roboto, oxygen, ubuntu, cantarell, fira sans, droid sans, helvetica neue, Arial, sans-serif;
            font-size: 16px;
        }

        html {
            height: 100%
        }

        body {
            position: relative;
            min-height: 100%;
            color: #555;
            background-color: #fff;
            margin: 0;
            padding-bottom: 100px;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            color: #394352
        }


        .content-wrapper {
            width: auto;
            margin-left: 10%;
            margin-right: 10%;
        }

        .content-wrapper.error {
            padding: 40px 0
        }

        header {
            position: relative;
            border-bottom: 1px solid #eee
        }

        header .content-wrapper {
            display: flex
        }

        header h1,
        header img {
            display: flex;
            flex-grow: 1;
            flex-basis: 0;
            font-size: 20px;
            margin: 0;
            padding: 24px 0
        }

        header nav {
            display: flex;
            flex-grow: 1;
            flex-basis: 0;
            justify-content: center;
            align-items: center
        }

        header nav a {
            white-space: nowrap;
            text-decoration: none;
            color: #555;
            padding: 10px;
            margin: 0 10px
        }

        header nav a:hover {
            border-bottom: 1px solid #d9d9d9
        }

        header .link-icons {
            display: flex;
            flex-grow: 1;
            flex-basis: 0;
            justify-content: flex-end;
            align-items: center;
            position: relative
        }


        header .link-icons a {
            position: relative;
            text-decoration: none;
            color: #394352;
            padding: 9px;
            border-radius: 50%;
            margin-left: 5px
        }

        header .link-icons a:hover {
            background-color: #f2f2f2
        }

        header .link-icons a i {
            font-size: 18px
        }


        .content-wrapper h1 {
            font-size: 34px;
            font-weight: 400;
            margin: 0;
            padding: 20px 0 10px;
            text-align: center;
        }

        .products-header{
            padding-top: 30px;
        }

        .products-wrapper {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding-top: 40px;
        }

        table img {
            transform: scale(1);
            transition: transform 1s
        }

        table img:hover {
            transform: scale(1.05);
            transition: transform 0.5s
        }

        table, tr, td, th{
            text-align:center;
            align-items:center;
        }

        a{
            text-decoration: none;
            color:#555;
        }

        a:hover {
            text-decoration: underline;
        }
        
        footer {
            position: absolute;
            bottom: 0;
            border-top: 1px solid #eee;
            padding: 20px 0;
            width: 100%
        }
        .crtSection {
 cursor: pointer;
  position: relative;
  display: block;
  /* width: 28px; */
  /* background-color:red; */
  /* padding: 10px; */
  height: 25px;
  height: auto;
  overflow: hidden;
  .material-icons {
    position: relative;
    top: 4px;
    z-index: 1;
    font-size: 24px;
    color: white;
    /* background-color:red; */
  }
  .count {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    font-size: 11px;
    border-radius: 50%;
    background: #d60b28;
    /* background: rgb(255, 174, 0); */
    width: 16px;
    height: 16px;
    line-height:16px;
    display: block;
    text-align: center;
    color: white;
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
  }
}
.crt{
   border-radius:5px;
    border:none; 
    cursor:pointer;
    background: rgb(255, 174, 0);
	color: white;
    padding:7px;
    width:80%;
    margin:auto;
    font-weight:bold;
}
.heading{
    background-color:#DAD7B4;
    color:  rgb(255, 174, 0);
    padding:0.02px;
    text-align:center;
    /* width:80%; */
    margin:auto;
    border:none;

}
.chead{
    font-size:25px;
}
.cont{
    padding: 20px;
}
#myform {
    text-align: center;
    padding: 5px;
    border: 1px dotted #ccc;
    margin: 2%;
}
.qty {
    width: 40px;
    height: 25px;
    text-align: center;
}
input.qtyplus { width:25px; height:25px;}
input.qtyminus { width:25px; height:25px;}
.tbl{
    width:100%;
    border:1px solid  rgb(255, 174, 0);
    border-left:none;
    border-right:none;
    /* border-top:none; */
}
.tbl2{
    /* border:5px solid; */
    width:100%;
    padding:15px;
}
.plbtn{
    width:200px; 
    margin-top:10px; 
    border:none; 
    padding:5px;
    background-color:rgb(255, 174, 0);
    font-weight:bold;
    color:white;
    border-radius:5px;
    cursor: pointer;
}
.plbtn:hover{
    background-color:rgb(200, 120, 0);
}

    </style>
</head>
<body>
<header>
        <div class="content-wrapper">
            <h1>TASTE BURST</h1>
            <nav>
                <!-- <a href="../../../">Home</a>
                <a href="../Dishes.php">Menu</a>
                <a href="">Blog</a>
            <a href="Cart.php/" class="crtSection" style="margin-left:80px;  ">
                 <span class="count" style="font-size:10px; ">10</span>
                 <i class="fa-solid fa-cart-shopping" style="font-size:23px; "></i>

            </a> -->
             
            </nav>

            
        </div>
    </header>
  <div class="cont"> 
    <div class="heading">
        <h1 class="chead">My Cart</h1>
    </div>
<div>
      <div class="leftbar">
            <table class="tbl">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $total= 0;
                $grandTotal = 0;
                 if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as  $value){
                        $total += $value['productPrice']*$value['productQnty'];
                        if($total){
                            $grandTotal = $total+50;
                        }
                 echo "  
                    <form action='Cart.php' method='POST'>
                       <tr max='10' class='tbl2'>
                            <td>$value[productName]</td>
                            <td>₹$value[productPrice]</td>
                            <td class='quantity'>
                            
                                  
                                 <input type='number' class='input-box' value='$value[productQnty]' min='1' max='1'>
                                  
                             
                             </td>
                             <td><button name='remove'><i class='fa-solid fa-trash-can'></i></button></td>
                            <td><input type='hidden' name='item' value ='$value[productName]'></td>

                        </tr> 
                    </form>
                ";
                    }
                 }
                 ?>
                </tbody>
                
                
               <th></th>
            </table>
      </div>
      <div class="rightbar">
          <table class="tbl2">
        
          <form action="s.php" method="post">
              <tr>
                <th colspan="2">Price Details</th>
              </tr>
              <tr>
                <td style="text-align:start;">Price</td>
                <?php echo"  <td>₹$total</td>"?>
              </tr>
              <tr>
                <td  style="text-align:start;">Delivery Charges</td>
                <td>₹50</td>
              </tr>
              <tr>
                <td  style="text-align:start; font-weight:bold;">Total Amount</td>
                <?php echo "<td style='font-weight:bold;'>₹$grandTotal</td>"?>
              </tr>
              <tr>
                <td colspan="2" style="text-align:end;">
                <input type="submit" class="plbtn" value="Place Order" name="plce">
                <!-- <a href="../Order Details/OrderDetails.php"><button class="plbtn" >Place order</button></a> -->
                </td>
              </tr>
              <?php
          if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as  $value){
                        echo "
                        <input type='hidden' value='$value[productName]'  name='namee' >
                        <input type='hidden' value='₹$grandTotal' name='pprice'>
                        ";
                    }
          }
          ?>
         
            </form>
          </table>
      </div>
</div>
</div> 
<script>
 (function () {
  const quantityContainer = document.querySelector(".quantity");
  const minusBtn = quantityContainer.querySelector(".minus");
  const plusBtn = quantityContainer.querySelector(".plus");
  const inputBox = quantityContainer.querySelector(".input-box");

  updateButtonStates();

  quantityContainer.addEventListener("click", handleButtonClick);
  inputBox.addEventListener("input", handleQuantityChange);

  function updateButtonStates() {
    const value = parseInt(inputBox.value);
    minusBtn.disabled = value <= 1;
    plusBtn.disabled = value >= parseInt(inputBox.max);
  }

  function handleButtonClick(event) {
    if (event.target.classList.contains("minus")) {
      decreaseValue();
    } else if (event.target.classList.contains("plus")) {
      increaseValue();
    }
  }

  function decreaseValue() {
    let value = parseInt(inputBox.value);
    value = isNaN(value) ? 1 : Math.max(value - 1, 1);
    inputBox.value = value;
    updateButtonStates();
    handleQuantityChange();
  }

  function increaseValue() {
    let value = parseInt(inputBox.value);
    value = isNaN(value) ? 1 : Math.min(value + 1, parseInt(inputBox.max));
    inputBox.value = value;
    updateButtonStates();
    handleQuantityChange();
  }

  function handleQuantityChange() {
    let value = parseInt(inputBox.value);
    value = isNaN(value) ? 1 : value;

    // Execute your code here based on the updated quantity value
    console.log("Quantity changed:", value);
  }
})();

</script>
</body>
</html>