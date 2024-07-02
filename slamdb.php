<html lang="en">
<head>
  <title>Slam Book 2019</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Butcherman' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Della Respira' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
	<style>
	#bg-color{
		background-color:#E6E6FA;
		color:black;
		border-left:8px solid #FFA500;
		padding:80px;
		top:250px;
		font-size:16px;
	}
	</style>
	<body>
	<div class="container" id='bg-color'>
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
<?php
		$myemail = "udayka782@gmail.com";
		if(isset($_POST['submit'])){
			$to = $myemail; // this is my Email address
			$from = $_POST['mail']; // sender
			$subject = "FriendsZone Slambook";
			$headers = "From:" . $from;
			$headers2 = "From:" . $to;
			
			$message ="Name : ".$_POST['name']."\n".
			"Nickname : ".$_POST['nickname']."\n".
			"Home : ".$_POST['home']." \n".
			"Contact : ".$_POST['phone']."\n".
			"Email : ".$_POST['mail']." \n".
			"Born : " .$_POST['born']."\n".
			"Like : ".$_POST['like']. " \n" .
			"Strength: " .$_POST['strength']."\n".
			"Memories : ".$_POST['memories']." \n".
			"Dress: " .$_POST['dress']."\n".
			"Dish : ".$_POST['dish']. " \n" .
			"Colors : " .$_POST['color']."\n".
			"Movies : ".$_POST['movie']. " \n".
			"Actor : " .$_POST['actor']."\n".
			"Actress : ".$_POST['actress']. "\n".
			"Crazy : " .$_POST['crazy']."\n".
			"Moment : ".$_POST['moment']." \n".
			"Boring : " .$_POST['bore']."\n".
			"Ambition : ".$_POST['ambition']."\n" .
			"Trip : " .$_POST['trip']."\n".
			"Friends : ".$_POST['friend']. "\n" .
			"Likeme : " .$_POST['likeme']."\n".
			"Aboutme : ".$_POST['aboutme']." \n" .
			"Quote : " .$_POST['quote']."\n". 
			"Date : ".$_POST['date']. "\n".
			"Signature :".$_POST['sign'];
			
			
			
			
			$status= mail($to,$subject,$message,$headers);
			
			echo "<div><p align='center'><span><img src='images/mail.png' width='30px' height='25px'></span> Mail Sent <br> Thank you...! " . $_POST['name'] . ", we will contact you shortly.</p><div>";
			
			echo '<div class="text-center"><a href="slam.php" role="button" > Visit Our Site </a><div>';
		}
		
	?>
</div>
	<div class="col-sm-3"></div>
	</div>
	</body>
</html>