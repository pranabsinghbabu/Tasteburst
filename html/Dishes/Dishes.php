<?php
session_start();
$user = $_SESSION['user_name'];
if($user == true){

}
else{
    header('location:../../home.html');
}
$count = 0;

// Check if the 'cart' session variable is set
if (isset($_SESSION['cart'])) {
    // Count the number of items in the cart
    $count = count($_SESSION['cart']);
}

// Check if the cart is empty, and if so, redirect to Dishes.php
// Make sure to use the correct path in the header location
// Example: header('Location: ../../Dishes.php');
// Note: The exit() function is added to stop the script execution after redirection
// Commented out for now to prevent immediate redirection for testing purposes

// if ($count === 0) {
//     header('Location: Dishes.php');
//     exit();
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1">
    <title>Products</title>
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2ca0a3c5a3.js" crossorigin="anonymous"></script>
    
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");



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
            margin-left: 6%;
            margin-right: 6%;
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
.crt:hover{
    background: rgb(200, 120, 0);
}


    </style>
</head>

<body>
    <header>
        <div class="content-wrapper">
            <h1>TASTE BURST</h1>
            <nav>
                <a href="../../home.html">Home</a>
                <a href="">Menu</a>
                <a href="Reservation.php">Reservation</a>
                <a href="CancelOrder.php">Cancel Order</a>
                <a href="ViewCart.php/" class="crtSection" style="margin-left:80px;  ">
                    <?php echo "<span class='count' style='font-size:10px; '>$count</span>" ?>
                    <i class="fa-solid fa-cart-shopping" style="font-size:23px; "></i>
                </a>
                <!-- Log Out -->
                <form method="post">
                    <br>
                   <a href="../../home.html" style="padding:6px 15px; border-radius:27px; color:white; background-color:red; text-decoration:none;  font-size:14px;">Logout</a>
                    <table align="center">
                        <br><br>
                        <?php
                        
                            echo $_SESSION['user_name'];   
                        ?>
                    </table>

                    <?php
                    // if (isset($_POST['su'])) {
                    //     $servername = "localhost:3306";
                    //     $username = "root";
                    //     $password = "pranab1234";
                    //     $database = "project";
                    //     $conn = mysqli_connect($servername, $username, $password, $database);

                    //     $instr = "delete from tmp";
                    //     mysqli_query($conn, $instr);

                    //     $conn->close();

                    //     header('Location: ../../home.html');
                    //     exit(); // Make sure to exit after sending the header
                    // }
                    ?>
                </form>
            </nav>
        </div>
    </header>
    <main>
        <div class="content-wrapper">
            <h1>MENU</h1>
            <form method="post">
                <table style="width:100%">
                    <!-- ... your existing HTML content ... -->

                    <?php
                    {
                    
                        $servername="localhost";
                        $username="root";
                        $password="pranab1234";    
                        $database="project";
                        $conn=mysqli_connect($servername,$username,$password,$database);

                        if($conn->connect_error)
                        {
                            die("connection failed".$conn->connect_error);
                        }

                        //VEGETARIAN

                        echo "  
                                <tr>
                                <th colspan='4'>
                                    <div class='products-header'>
                                        <p>Vegetarian</p><hr>
                                    </div>
                                </th>
                                </tr>
                                <tr>";
                        // Retrieve data from the database
                        $x=0;
                        $sql1 = "SELECT * FROM food where type='Veg'";
                        $result1 = $conn->query($sql1);
                        
                        // Populate the HTML table
                        if ($result1->num_rows > 0) {
                            while($row1 = $result1->fetch_assoc()) {
                                echo "
                                        <td>
                                        <table  style='width:100%'>
                                        <div class='products-wrapper'>
                                         <form action='Cart.php' method='POST'>
                                            <tr>
                                            <th colspan='2' >
                                            <img src='images/" . $row1["name"] . ".jpg' width='200' height='200' alt='" . $row1["name"] . "'><br>

                                            " . $row1["name"] . "</th>
                                            </tr>

                                            <tr>
                                            <td> Price:</td>
                                            <td  value='82'>". $row1["price"] ."</td>
                                    
                                            </tr>
                                            
                                            <input type='hidden' name='Item_Name' value='$row1[name]'>
                                            <input type='hidden' name='price' value='$row1[price]'>
                                            <tr>
                                            <td style=' padding:5px;' colspan='2'>
                                            <input type='submit' value='Add to Cart' class='crt' name='add_to_cart'>
                                            </td>
                                            </tr>
                                            </a>
                                         </form>         
                                            </div>
                                            ";
                                            
                                            echo "</table>";
                                            echo "</td>";
                                            $x++;  
                                            if ($x==4){
                                                echo "</tr>
                                                <tr>";
                                                $x=0;
                                            }
                                          
                            }    
                            
                        } 

                        //NON-VEGETARIAN

                        echo "  <tr>
                                <th colspan='4'>
                                    <div class='products-header'>
                                        <p>Non-Vegetarian</p><hr>
                                    </div>
                                </th>
                                </tr>
                                <tr>";
                        // Retrieve data from the database
                        $x=0;
                        $sql1 = "SELECT * FROM food where type='Non-Veg'";
                        $result1 = $conn->query($sql1);
                        
                        // Populate the HTML table
                        if ($result1->num_rows > 0) {
                            while($row1 = $result1->fetch_assoc()) {
                                echo "
                                        <td>
                                        <table  style='width:100%'>
                                        <div class='products-wrapper'>
                                        <form action='Cart.php' method='post'>
                                            <tr>
                                            <th colspan='2'>
                                            <img src='images/" . $row1["name"] . ".jpg' width='200' height='200' alt='" . $row1["name"] . "'><br>

                                            " . $row1["name"] . "</th>
                                    
                                            </tr>

                                            <tr>
                                            <td> Price:</td>
                                            <td>". $row1["price"] ."</td>
                                            </tr>
                                            <input type='hidden' name='Item_Name' value='$row1[name]'>
                                            <input type='hidden' name='price' value='$row1[price]'>
                                            <tr>
                                            <td style=' padding:5px;' colspan='2'>
                                            <input type='submit' value='Add to Cart' class='crt' name='add_to_cart'>
                                            </td>
                                            </tr>
                                            </a>
                                            </form>
                                        </div>
                                    ";
                                
                                echo "</table>";
                                echo "</td>";
                                $x++;  
                                if ($x==4){
                                    echo "</tr>
                                    <tr>";
                                    $x=0;
                                }
                            }    
                            
                        }

                        //CAKES AND BAKES

                        echo "  <tr>
                                <th colspan='4'>
                                    <div class='products-header'>
                                        <p>Cakes and Bakes</p><hr>
                                    </div>
                                </th>
                                </tr>
                                <tr>";
                        // Retrieve data from the database
                        $x=0;
                        $sql1 = "SELECT * FROM food where type='Cakes and Bakes'";
                        $result1 = $conn->query($sql1);
                        
                        // Populate the HTML table
                        if ($result1->num_rows > 0) {
                            while($row1 = $result1->fetch_assoc()) {
                                echo "
                                        <td>
                                        <table  style='width:100%'>
                                        <div class='products-wrapper'>
                                        <form action='Cart.php' method='post'>
                                            <tr>
                                            <th colspan='2'>
                                            <img src='images/" . $row1["name"] . ".jpg' width='200' height='200' alt='" . $row1["name"] . "'><br>

                                            " . $row1["name"] . "</th>
                                            </tr>

                                            <tr>
                                            <td> Price:</td>
                                            <td>". $row1["price"] ."</td>
                                            </tr>
                                            <input type='hidden' name='Item_Name' value='$row1[name]'>
                                            <input type='hidden' name='price' value='$row1[price]'>
                                            <tr>
                                            <td style=' padding:5px;' colspan='2'>
                                            <input type='submit' value='Add to Cart' class='crt' name='add_to_cart'>
                                            </td>
                                            </tr>
                                            </a>
                                            </form>
                                        </div>
                                    ";
                                
                                echo "</table>";
                                echo "</td>";
                                $x++;  
                                if ($x==4){
                                    echo "</tr>
                                        <tr>";
                                    $x=0;
                                }
                            }    
                            
                        } 

                        //DRINKS

                        echo "  <tr>
                                <th colspan='4'>
                                    <div class='products-header'>
                                        <p>Soft Drinks</p><hr>
                                    </div>
                                </th>
                                </tr>
                                <tr>";
                        // Retrieve data from the database
                        $x=0;
                        $sql1 = "SELECT * FROM food where type='Drinks'";
                        $result1 = $conn->query($sql1);
                        
                        // Populate the HTML table
                        if ($result1->num_rows > 0) {
                            while($row1 = $result1->fetch_assoc()) {
                                echo "
                                        <td>
                                        <table  style='width:100%'>
                                        <div class='products-wrapper'>
                                        <form action='Cart.php' method='post' >
                                            <tr>
                                            <th colspan='2'>
                                            <img src='images/" . $row1["name"] . ".jpg' width='200' height='200' alt='" . $row1["name"] . "'><br>

                                            " . $row1["name"] . "</th>
                                            </tr>

                                            <tr>
                                            <td> Price:</td>
                                            <td>". $row1["price"] ."</td>
                                            </tr>
                                            <input type='hidden' name='Item_Name' value='$row1[name]'>
                                            <input type='hidden' name='price' value='$row1[price]'>
                                            <tr>
                                            <td style=' padding:5px;' colspan='2'>
                                            <input type='submit' value='Add to Cart' class='crt' name='add_to_cart'>
                                            </td>
                                            </tr>
                                            </a>
                                            </form>
                                        </div>
                                    ";
                                
                                echo "</table>";
                                echo "</td>";
                                $x++;  
                                if ($x==4){
                                    echo "</tr>
                                        <tr>";
                                    $x=0;
                                }
                            }    
                            
                        } 
                        
                    $conn->close();   
                    }
                    ?>
                </table>
            </form>
        </div>
    </main>
    <footer>
        <div class="content-wrapper">
            <p>&copy; 2023, Taste Burst</p>
        </div>
    </footer>
    <script>
        // <!-- ... your existing script ... -->

            //    let crtbtn = document.querySelector('.crtSection');
            //    let crt = document.querySelector('.crt');

            //     crt.addEventListener('click',function(){
            //      console.log('clicked');
            //       alert('order added successfully')
            //     })

    </script>
</body>

</html>
