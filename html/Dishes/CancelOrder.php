<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancel Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #DAD9D7;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: auto;
            overflow: hidden;
        }
        
        form {
            background: #ffffff;
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
            /* box-shadow:3px 4px 6px black;  */
        }

        label {
            display: block;
            font-size: 18px;
            margin: 15px 0;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <form  method="post">
        <label for="orderNumber">Order Number:</label>
        <input type="text" id="orderNumber" name="orderNumber" required style="outline:none;">

        <label for="reason">Reason for Cancellation:</label>
        <textarea id="reason" name="reason" rows="4" required style="outline:none;"></textarea>

        <input type="submit" value="Cancel Order" name="can" style=" background: rgb(255, 174, 0);">
    </form>
</div>
<?php
  if(isset($_POST['can']))
  {
    $servername = "localhost:3306";
$username = "root";
$password = "pranab1234";
$database = "project";
$conn = mysqli_connect($servername,$username,$password,$database);
$id=$_POST['orderNumber'];
$q = "DELETE FROM orders where id = '$id' ";
$d = mysqli_query($conn,$q);
if ($d){
    echo "<script>alert('Your Order Canceled Successfully')</script>";
    header('location:../Dishes/Dishes.php');
  
}
  }
$servername = "localhost:3306";
$username = "root";
$password = "pranab1234";
$database = "project";
$conn = mysqli_connect($servername,$username,$password,$database);
$query = "SELECT * FROM orders ORDER BY id DESC";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
$id = mysqli_insert_id($conn);


?>
<div class="" style="background-color:green; width:40%; margin:auto; border-radius:4px;">
<h5 style="text-align:center; font-size:20px; padding:20px; color:white;"> <?php echo "Your Order Number is ".$result['id'];?></h5>
</div>


</body>
</html>