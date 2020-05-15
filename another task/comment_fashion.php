<html lang="en">
	<head>
	<meta charset = "UTF-8" content="widht=device-width, iniatial-scale=1">
	<title>COMMENT</title>
	<link rel="stylesheet" href="css/bootstrap.css">
		<style>
			h1{
				font-size:500%;
				color:tan;
			}
			h3{
				align:center;
				padding: 0px 610px;
			}
			body{
				font-family:Times new roman;
				font-size:100%;
			}
			p{
				margin-left:-20px;
			}
			*{
				box-sizing: border-box;
			}
			input[type=text], select, textarea{
				width:200%
				padding:12px 30px;
				border: 3px solid #ccc;
				border-radius:10px;
				box-sizing:border-box;
				margin-top:0px;
				margin-bottom:5px;
				margin-right:60px;
				margin-left:-65px;
				resize:vertical;
			}
			input[type=submit]{
				background-color:#4CAF50;
				color:white;
				padding:12px 20px;
				border:none;
				border-radius:15px;
				cursor:pointer;
				margin-left:-50px;
			}
			input[type=submit]:hover{
				background-color: #45a049;
			}
			.comment{
				border-radius:10px;
				border-color:black;
				background-color:transparent;
				padding: 10px 250px;
			}
			div{
				border-color:black;
				border-style:solid;
				width:30px;
				margin-left:500px;
				margin-right:100px;
			}

		</style>
	</head>
	
	<body>
	<body background="image/image5.jpeg" style="background-size:1600px 1500px" >
	
		<h1 align="center" style="font-family:marcelle script";><i>D x r k n i c o</i></h1>
		<p align="center" style="font-family:courier" style="font-size:130%";><b>. H I J A B  F A S H I O N . </b></p><br>
		
		<h3><b>COMMENT SECTION</b></h3>
		<div class="comment">
			<form action="/comment_fashion.php">
				<p><label for="name">Name</label></p>
				<p><input type="text" id="name" name="name" placeholder="Your name..."></p>
				
				<p><label for="email">Email</label></p>
				<p><input type="text" id="email" name="email" placeholder="Your email..."></p>
				
				<p><label for="gender">Gender</label></p>
				<select id="gender" name="gender">
					<p><option value="male">Male</option></p>
					</p><option value="female">Female</option></p>
				</select>
				
				<p><label for="comment">Comment</label></p>
				<p><textarea id="comment" name="comment" placeholder="Write your comment..." style="height:150px"></textarea></p>
				
				<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>