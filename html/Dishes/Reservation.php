<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Table Reservation</title>
	<meta name="viewport" content="width=device-width,
      initial-scale=1.0" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Alegreya:wght@400;500;700&family=Dancing+Script:wght@400;500;600;700&display=swap');

		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: 'Alegreya', serif;


		}

		body {
			height: 100vh;
			display: grid;
			align-items: center;
			font-family: 'Poppins', sans-serif;
			background: url("background.png");
		}

		.container {
			width: 100%;
			background-color:black;
			align-items: center;
			max-width: 650px;
			padding: 20px;
			justify-content: center;
			margin-top: 4px;
			margin-bottom: 20px;
			text-align: center;
			border-radius: 10px;
			box-shadow: 1px 1px 50px grey;
			margin-left: 430px;
		}

		form {
			display: flex;
			flex-direction: column;

		}

		.form-title {
			font-size: 26px;
			font-weight: 600;
			text-align: center;
			padding-bottom: 6px;
			color: brown;
			text-shadow: 1px 1px 1px brown;
			font-family: Baskerville Old Face;
		}

		.main-user-info {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			padding: 20px 0;
		}

		.user-input-box:nth-child(2n) {
			justify-content: end;
		}

		.user-input-box {
			display: flex;
			flex-wrap: wrap;
			width: 50%;
			
		}

		.user-input-box label {
			width: 90%;
			color: white;
			font-size: 20px;
			font-weight: 400;
			margin: 4px 0;
			padding-right: 167px;
			

		}

		.user-input-box input {
			height: 40px;
			width: 95%;
			border-radius: 7px;
			outline: none;
			border: 1px solid grey;
			padding: 0 10px;
		}


		.form-submit-btn input {
			cursor: pointer;
		}

		.form-submit-btn {
			margin-top: 40px;
		}

		.form-submit-btn input {
			display: block;
			width: 100%;
			margin-top: -22px;
			font-size: 25px;
			padding: 10px;
			border: none;
			border-radius: 3px;
			color: black;
			background: rgb(255, 174, 0);
			
		}

		.form-submit-btn input:hover {
			background: rgb(255, 174, 0);
			color: black;
			box-shadow: 1px 1px 20px grey;
			transition: 0.7s;
		}

		@media(max-width: 600px) {
			.container {
				min-width: 280px;
			}

			.user-input-box {
				margin-bottom: 12px;
				width: 100%;
			}


			.gender-category {
				display: flex;
				justify-content: space-between;
				width: 100%;
			}

			.main-user-info {
				max-height: 380px;
				overflow: auto;
			}

			.main-user-info::-webkit-scrollbar {
				width: 0;
			}
		}

		.checkbox {
			color: white;
			font-size: 22px;
			padding-right: 252px;
		}

		footer {
			background-color: #333;
			color: #fff;
			text-align: center;
			padding: 20px;


		}
	</style>
</head>

<body>
	<div class="container">
		<h1 class="form-title" style="color:rgb(255, 187, 0);font-size:50px;">Table Reservation</h1>
		<h1 style="color:rgb(255, 187, 0); font-size:20px;">Booking request +91-81019-70045</h1>
		<form method="post">
			<div class="main-user-info">
				<div class="user-input-box">
					<label for="fullName">Full Name</label>
					<input type="text" id="fullName" name="name" placeholder="Enter Full Name" required />

				</div>
				<div class="user-input-box">
					<label for="phone">Phone No.</label>
					<input type="text" id="phone" name="phone" placeholder="Enter Your Number" required />
				</div>
			</div>
			<div class="main-user-info">
				<div class="user-input-box">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" placeholder="Enter Email" required />
				</div>

				<div class="user-input-box">
					<label for="people">No. of People</label>
					<input type="number" id="phone" name="people" placeholder="Enter Number of people" min="1" max="8" required />
				</div>
			</div>
			<div class="main-user-info">
				<div class="user-input-box">
					<label for="Message-box">Message</label>
					<input type="text" id="message" name="message" placeholder="Message" required />
				</div>

				<div class="user-input-box">
					<label for="datetime">Date & Time</label>
					<input type="datetime-local" name="date" placeholder="date" required />
				</div>
			</div>

			<div for="terms" class="checkbox"">
			<input type="checkbox" style="color:black;font-size:20px;" id="conditions" name="terms" required>
				I agree to the terms and conditions
			</div>
			<div class="form-submit-btn">
			<a href="../Dishes/Dishes.php" ><input type="submit" name="su" id="su" onclick="showSuccessPrompt();" value="Book Now"></a>   
			</div>
		</form>
	</div>
	</div>



	<?php
	if (isset($_POST['su'])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$people = $_POST['people'];
		$message = $_POST['message'];
		$date = $_POST['date'];

		$servername = "localhost";
		$username = "root";
		$password = "pranab1234";
		$database = "project";
		$conn = mysqli_connect($servername, $username, $password, $database);

		$instr = "insert into reservation values('$name','$phone','$email','$people', '$message', '$date')";
		mysqli_query($conn, $instr);
		echo "<script>
		window.location.href = '../Dishes/Dishes.php';
		</script>";
    exit();
	}
	?>
<script>
    function showSuccessPrompt() {
      alert('Your Table is Booked');
      }
</script>

</body>

</html>