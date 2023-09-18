<!DOCTYPE html>
<html>
<link rel="stylesheet" a href="style.css">
<link rel="stylesheet" a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.table,th,td{
		height: 10%;
		width: 70%	;
		background-color: none;
	}

	</style>
<head>

<!--	<center><h1> Welcome to the Lyft Car Services</h1></center>-->
	
	
</head>
<body>
<center>

<form action = "insertcar.php" method = "POST">
			<div ><h2 style="font-size:30px; font-family:serif; color:powderblue;" >Please Enter Your Details</h2>
				<input type="text" name = "c_id" value="Customer Id" class="field1"/><br>
			<!--</div><!--</form>-->
				<input type="text" name = "nm" value="Name" class="field1"/><br>
			<!--<form action = "" method = "POST"><br><br>-->
			<!--<div >-->
				<input type="text" name = "em" value="Email" class="field1"/><br>
			<!--</div><!--</form>-->
			
			<!--<form action = "" method = "POST"><br><br>-->
			<!--<div >-->
				<input type="text" name = "dob" value="DOB" class="field1"/><br>
			<!--</div><!--</form>-->
			
			<!--<form action = "" method = "POST"><br><br>-->
			<!--<div >-->
				<input type="text" name = "occ" value="Occupation" class="field1"/><br>
			<!--</div><!--</form>-->
			
			<!--<form action = "" method = "POST"><br><br>-->
			<!--<div >-->
				<input type="text" name = "add" value="Address" class="field1"/><br>
			<!--</div><!--</form>-->
			
			<!--<form action = "" method = "POST"><br><br>-->
			<!--<div >-->
				<input type="text" name = "lisc" value="Liscence #" class="field1"/><br>
			<!--</div><!--</form>-->
			
			<!--<form action = "" method = "POST"><br><br>-->
			<!--<div >-->
			
			<h2 style="font-size:30px; font-family:serif; color:powderblue;" >Enter Car Requirement Details</h2>
				<!--<input type="text"  value="Car Type" /><br>-->
				<label style="font-size:24pt; color:powderblue;" for="ctype">Choose Car Type:</label>
				<select style="font-size:22pt;" name = "ctype" id="ctype">
					  <option value="SUV">SUV</option>
					  <option value="Sports Car">Sports Car</option>
					  <option value="Sedan">Sedan</option>
					  <option value="Station Wagon">Station Wagon</option>
					  <option value="Mini Van">Mini Van</option>
				</select><br><br><br>
			
				<input type="text" name = "pkupl" value="PickUp Location" class="field1"/><br>
			
				<input type="text" name = "dpofl" value="DropOff Location" class="field1"/><br>
			<label style="font-size:24pt; color:#fff; opacity:80%;" for="pkupd">PickUp Date:</label>
				<input type="date" name = "pkupd" value="PickUp Date" class="field1"/><br><br><br>
			<label style="font-size:24pt; color:#fff;  opacity:80%;" for="dpofd">DropOff Date:</label>
				<input type="date" name = "dpofd" value="DropBack Date" class="field1"/><br><br><br>
			
				<!--<input type="text" name = "seats" value="Seats" class="field1"/><br>-->
				<label style="font-size:24pt; color:powderblue;" for="seats">Number of Seats</label>
				<select style="font-size:22pt;" name = "seats" id="seats">
					  <option value="2">2</option>
					  <option value="4">4</option>
					  
				</select><br><br><br>
				
			<h2 style="font-size:30px; font-family:serif; color:powderblue;" >Select Your Vehicle</h2>
				<input type="text" name = "vid" value="Vehicle ID" class="field1"/><br>
			
				<!--<input type="text" name = "bd" value="Brand" class="field1"/><br>-->
				<label style="font-size:24pt; color:powderblue;" for="seats">Brand </label>
				<select style="font-size:22pt;" name = "bd" id="bd">
					  <option value="Honda">Honda</option>
					  <option value="Ford">Ford</option>
					  <option value="Nissan">Nissan</option>
					  <option value="Volks Wagon">Volks Wagon</option>
					  
				</select><br><br><br>
				
				<input type="text" name = "vn" value="Vehicle Name" class="field1"/><br>
			
				<!--<input type="text" name = "vt" value="Car Type" class="field1"/><br>-->
			
				<!--<input type="text" name = "abc" value="Total Seats" class="field1"/><br>-->
			
				<input type="text" name = "cost" value="cost per day" class="field1"/><br>
				
				<input type="text" name = "av" value="Availibility" class="field1"/><br>
				
				<input type="text" name = "mile" value="Meter Reading" class="field1"/><br>
			
				<input type="submit" name = "booknow" value="Book Now" class="btn-login"/><br><br><br><br>
			</div>
			</form>

</center>
</body>
