<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;
}
body 
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background: #000;
	background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('Signup.png');
	background-size:cover;
	background-position:center center;
	background-repeat:no-repeat;
}
section 
{
	position: absolute;
	width: 100vw;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	gap: 2px;
	flex-wrap: wrap;
	overflow: hidden;
}
section::before 
{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	
	animation: animate 5s linear infinite;
}

section .signin
{
	position: absolute;
	width: 400px;
  	background: #222;  
	z-index: 1000;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 40px;
	border-radius: 4px;
	box-shadow: 0 15px 35px rgba(0,0,0,9);
}
section .signin .content 
{
	position: relative;
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	gap: 40px;
}
section .signin .content h2 
{
	font-size: 2em;
	color: rgb(255, 174, 0);
	text-transform: uppercase;
}
section .signin .content .form 
{
	width: 100%;
	display: flex;
	flex-direction: column;
	gap: 25px;
}
section .signin .content .form .inputBox
{
	position: relative;
	width: 100%;
}
section .signin .content .form .inputBox input 
{
	position: relative;
	width: 100%;
	background: #333;
	border: none;
	outline: none;
	padding: 25px 10px 7.5px;
	border-radius: 4px;
	color: #fff;
	font-weight: 500;
	font-size: 1em;
}
section .signin .content .form .inputBox i 
{
	position: absolute;
	left: 0;
	padding: 15px 10px;
	font-style: normal;
	color: #aaa;
	transition: 0.5s;
	pointer-events: none;
}
.signin .content .form .inputBox input:focus ~ i,
.signin .content .form .inputBox input:valid ~ i
{
	transform: translateY(-7.5px);
	font-size: 0.8em;
	color: #fff;
}
.signin .content .form .links 
{
	position: relative;
	width: 100%;
	display: flex;
	justify-content: space-between;
}
.signin .content .form .links a 
{
	color: #fff;
	text-decoration: none;
}
.signin .content .form .links a:nth-child(2)
{
	color: rgb(255, 174, 0);
	font-weight: 600;
}
.signin .content .form .inputBox input[type="submit"]
{
	padding: 10px;
	background: rgb(255, 174, 0);
	color: #000;
	font-weight: 600;
	font-size: 1.35em;
	letter-spacing: 0.05em;
	cursor: pointer;
}
input[type="submit"]:active
{
	opacity: 0.6;
}
@media (max-width: 900px)
{
	section span 
	{
		width: calc(10vw - 2px);
		height: calc(10vw - 2px);
	}
}
@media (max-width: 600px)
{
	section span 
	{
		width: calc(20vw - 2px);
		height: calc(20vw - 2px);
	}
}
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<section>
    <div class="signin">
      <div class="content">
        <h2>Login</h2>


        <form method="post" class="form">
          <div class="inputBox">
            <input type="text" name="un" id="username" placeholder="Username" autocomplete="off" required>
          </div>
          
          <div class="inputBox">
            <input type="password" name="ps" placeholder="Password" autocomplete="off">
          </div>

          <div class="links">
            <a href="Forgot.php">Forgot Password</a>
            <a href="Signup.php">Signup</a>
          </div>

          <div class="inputBox">
            <input type="submit" name="su" value="Login">
          </div>
        </form>


      </div>
    </div>
  </section>
<!-- partial -->

<?php
	if(isset($_POST['su']))
	{
    	$un=$_POST['un'];
	    $ps=$_POST['ps'];
	    $servername="localhost";
	    $username="root";
    	$password="pranab1234";
	    $database="project";
    	$conn=mysqli_connect($servername,$username,$password,$database);
	    $q1="select * from signup where name='$un' and upass='$ps'";
	    $r=$conn->query($q1);
	    if(mysqli_num_rows($r)>0){
            $q2="insert into tmp values('$un')";
            mysqli_query($conn,$q2);
            header('Location:../../html/Dishes/Dishes.php');
             $_SESSION['user_name'] = $un;

        }
		else{
			echo" login faild";
		}
            
        
	}
?>
  
</body>
</html>