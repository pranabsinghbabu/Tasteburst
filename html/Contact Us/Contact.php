<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
</head>
<body style="background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('New Menu.png');">

        
    <nav>
        <div class="logo">
            <img src="Logo.png" alt="Tasteburst">
            <h1> Tasteburst <span> With Us </span> </h1> 
            <!-- You should use span when you want to style a particular part of your content differently or manipulate it with JavaScript. You can also use it as a container for inline elements. -->
        </div>
            <ul>
            <li><a href="../../home.html">Home</a></li>
            <li><a href="../About Us/About.php">About</a></li>
            <li><a href="../Contact Us/Contact.php">Contact Us</a></li>                
            </ul>
    </nav>

    <br><br>

    <div class="container"> 
        
		<div class="contact-wrap">
		    
			<div class="contact-in">
				<h1>Contact Us</h1>
				<h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
				<p>123-456-789</p>
				<h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
				<p>tasteburst@gmail.com</p>
				<h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
				<p>Asansol, West Bengal, India</p>
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="contact-in">
				<h1>Send a Message</h1>
				<form method="post">
					<input type="text" name="us" placeholder="Full Name" class="contact-in-input" autocomplete="off" required>
					<input type="email" name="em" placeholder="Email" class="contact-in-input" autocomplete="off" required>
					<input type="text" name="ph" placeholder="Phone Number" 
					class="contact-in-input" pattern="[0-9]*" 
					title="Phone number should contain only digits." autocomplete="off" required>
					<textarea name="ms" placeholder="Message" class="contact-in-textarea" autocomplete="off" required></textarea>
					<input type="submit" name="su" value="SUBMIT" class="contact-in-btn">
				</form>
			</div>
			<div class="contact-in">
				<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.8850935860537!2d86.9483182751188!3d23.71579709010435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f71f28112dc85f%3A0xc2814fdb4c367784!2sAsansol%20Engineering%20College%20(AEC)!5e0!3m2!1sen!2sin!4v1697121955906!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		
	</div>     

        <?php
        if(isset($_POST['su']))
        {
            $servername="localhost";
            $username="root";
            $password="pranab1234";
            $database="project";
            
            $conn=mysqli_connect($servername,$username,$password,$database);
            
            $name=$_POST['us'];
            $email=$_POST['em'];
            $phone=$_POST['ph'];
            $message=$_POST['ms'];
            $instr="insert into contactus values('$name','$email','$phone','$message')";
            
            mysqli_query($conn,$instr);
            header('Location:../../home.html');
        }
        ?>


    <!-- Site footer -->
<!-- Site footer -->
<footer class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <div style="padding-left: 30px;">
                <br><br><br>
                <img src="Logo.png" alt="" style="height: 65%; width: 65%; padding-left: 30px; padding-top: 10px;">
                
            </div>
            <div>
                <br><br><br>
                <h6 class="footer__title">Categories</h6>
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <a href="./html/Login/Login.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Vegeterian</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="./html/Login/Login.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Non-Vegeterian</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="./html/Login/Login.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Cakes and Bakes</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="./html/Login/Login.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Soft Drinks</a>
                    </li>

                    <li class="footer__list-item">
                        <a href="./html/Login/Login.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Others</a>
                    </li>
                </ul>
            </div>
            <div>
                <br><br><br>
                <h6 class="footer__title">Business</h6>
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <a href="#" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Home</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="./html/About Us/About.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">About Us</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="./html/Contact Us/Contact.php" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Contact Us</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="#" class="footer__list-link" style= "color: #ffa200; text-decoration: none;">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="footer__divider">
        <div class="footer__bottom">
            <span class="copyright" style="padding-left: 450px;">&copy; Copyright &copy; 2023 All Rights Reserved by 
                <a href="#" style= "color: #ffa200; text-decoration: none;"> Taste Burst</a>.
            </span>

            <ul class="footer__list footer__list--bottom" style="padding-left: 50px;">
                <li class="footer__list-item">
                    <a href="#" class="footer__list-link">
                        <i class="fa fa-facebook" style="padding-right: 40px;"></i>
                    </a>
                </li>
                <li class="footer__list-item">
                    <a href="#" class="footer__list-link">
                        <i class="fa fa-instagram" style="padding-right: 40px;"></i>
                    </a>
                </li>
                <li class="footer__list-item">
                    <a href="#" class="footer__list-link">
                        <i class="fa fa-twitter" style="padding-right: 40px;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>


      
</body>
</html>