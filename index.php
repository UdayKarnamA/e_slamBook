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
body{
	background-color:#F5F5F5;
}
#bg{
	background-color:orange;
}
#bg-green{
	background-color:white;
}
#bg-blue{
	background-color:	#6495ED;
}
input[type=text] {
    background:white;
    border: none;
    border-bottom:1px solid #000000;
	color:black;
	font-family:calibar;
	font-size:16px;
	font-weight:bold;
}
img{
  max-width:180px;
  border:5px solid black;
}
input[type=file]{
padding:10px;
background:#2d2d2d;}

h1{
	font-family:Butcherman;
	font-size:75px;
	color:black;
}
h3{
	font-family:Della Respira;
	font-size:20px;
	color:white;
	text-align:center;
	font-weight:bold;
}
label{
	color: #990099;
	font-size:14px;
	font-family:Comic Sans MS;
}
.footer{
	background-color:#6495ED;
	color:white;
	height:100px;
	padding:40px;
}
</style>
<script>
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#dp')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<body>
	<div class="container" id="bg">
		<div class="col-sm-2"></div>
		<div class="col-sm-8" id="bg-green">
			<form action="slamdb.php" method="POST">
				<div class="row form-group" id="bg-blue">
					<div class="col-sm-6"><h1> Slam Book </h1><h3>My Friends My World</h3></div>
					<!-- <div class="col-sm-6 text-center">
						<img id="dp" src="Profile.png" alt="Upload Photo" />
						<input type="file" name="mydoc" onchange="readURL(this);"/>
					</div> -->
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>My Name: </label></div>
					<div class="col-sm-8"><input type="text" name="name" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>You Can Call Me: </label></div>
					<div class="col-sm-8"><input type="text" name="nickname" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>My Sweet Home:</label></div>
					<div class="col-sm-8"><input type="text" name="home" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2"><label>Ring Me at: </label></div>
					<div class="col-sm-4"><input type="text" name="phone" class="form-control" required="required"></div>
					<div class="col-sm-2"><label>My Mail: </label></div>
					<div class="col-sm-4"><input type="text" name="mail" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>The Day I was Born: </label></div>
					<div class="col-sm-8"><input type="text" name="born" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>Boy/Girl i like that most & why: </label></div>
					<div class="col-sm-8"><input type="text" name="like" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>My Biggest Strength: </label></div>
					<div class="col-sm-8"><input type="text" name="strength" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>My Most Memorable Moment: </label></div>
					<div class="col-sm-8"><input type="text" name="memories" class="form-control"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>I Love wearning: </label></div>
					<div class="col-sm-8"><input type="text" name="dress" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>My Favourite Dish: </label></div>
					<div class="col-sm-8"><input type="text" name="dish" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>My Favourite Color: </label></div>
					<div class="col-sm-8"><input type="text" name="color" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>My Favourite Movie:</label></div>
					<div class="col-sm-8"><input type="text" name="movie" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>My Favourite Actor: </label></div>
					<div class="col-sm-8"><input type="text" name="actor" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>My Favourite Actress: </label></div>
					<div class="col-sm-8"><input type="text" name="actress" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>I'm Crazy about: </label></div>
					<div class="col-sm-8"><input type="text" name="crazy" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>Most Embrassing Momemnt: </label></div>
					<div class="col-sm-8"><input type="text" name="moment" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>What bores me most: </label></div>
					<div class="col-sm-8"><input type="text" name="bore" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>My Ambition: </label></div>
					<div class="col-sm-8"><input type="text" name="ambition" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>Holiday Spot:</label></div>
					<div class="col-sm-8"><input type="text" name="trip" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>Your Best Friends: </label></div>
					<div class="col-sm-8"><input type="text" name="friend" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>Did u like me..if yes/no why ? </label></div>
					<div class="col-sm-8"><input type="text" name="likeme" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>Something Tell about me: </label></div>
					<div class="col-sm-8"><input type="text" name="aboutme" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4"><label>Favourite Quatation: </label></div>
					<div class="col-sm-8"><input type="text" name="quote" class="form-control" required="required"></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2"><label>Date : </label></div>
					<div class="col-sm-4"><input type="text" name="date" class="form-control" required="required"></div>
					<div class="col-sm-2"><label>My Signature : </label></div>
					<div class="col-sm-4"><input type="text" name="sign" class="form-control" required="required"></div>
				</div>
				<div class="row form-group text-center">
					<div class="col-sm-12"><button type="submit" class="btn btn-primary" name="submit"> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  Save &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </button></div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12 text-center footer"> Copyright@2024 </div>
				</div>
			</form>
		</div>
		<div class="col-sm-2">
			<div id="google_translate_element"></div>

			<script type="text/javascript">
				function googleTranslateElementInit() {
				  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
				}
			</script>
			<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> </script>
		</div>
	</div>
</body>
</html>
