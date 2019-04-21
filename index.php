<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	
	<style>
		.container{
			width: 300px;
			margin: 0px auto;
			border: 2px solid red;
			padding: 30px;
		}

	</style>
	
</head>
<body>
	

	<div class="container">
			

			<form action="submit.php" method="POST" >
				
				<span>First Name :</span>
				<input type="text" name="givenFirstName">

				<br><br>
				<span>Last Name :</span>
				<input type="text" name="givenLastName">

				<br><br>
				<span>Age:</span>
				<input type="number" name="givenAge">

				<br><br>
				<span>Address</span>
				<input type="text" name="givenAddress">
				<br><br>

				
				<input type="submit" value="Registration">
			</form>


	</div>



</body>
</html>