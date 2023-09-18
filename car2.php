
<!DOCTYPE html>
<html>
<link rel="stylesheet" a href="style.css">
<link rel="stylesheet" a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

	</style>
<head>

	<center><h1> Welcome to the Lyft Car Services</h1></center>
	
	
</head>

<body>
<style>
.btn1{
	height: 50px;
	width: 400px;
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	font-size: 22px;
	color: #fff;
	}
.table,th,td{
		height: 10%;
		width: 70%	;
		background-color: none;
	}
</style>


	<div class="container">
	
	
	<img src="c2.png" >
			
			<form action = "ordercar.php" method = "POST">
			<div >
				<input type="submit" name = "abc" value="ORDER CAR" class="btn1"/>
			</div></form>
			
			<form action = "retrcar.php" method = "POST"><br><br>
			<div >
				<input type="submit" name = "abc" value="CUSTOMER INFORMATION" class="btn1"/>
			</div></form>
			
			<form action = "bookedV.php" method = "POST"><br><br>
			<div >
				<input type="submit" name = "abc" value="VIEW ALL BOOKED VEHICLES" class="btn1"/>
			</div></form>
	</div>
</body>
</html>