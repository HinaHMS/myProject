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
	<title> Customer Information </title>
	<style>
	body{
		background-color: #ffcccc;;
	}
	table,th,td{
		border: 1px solid black;
		width: 1100px;
		background-color: lightblue;
	}
	
	.btn{
		width: 10%;
		height: 35px;
		font-size:23;
		color: #ff8080;
		font-weight: bold;
	}
	.btnmain{
		width: 10%;
		height: 35px;
		font-size:23;
		color: #ffff00;
		font-weight: bold;
	}
	</style>
</head>

<body>
<a href="car2.php" class="btnmain" >Back to Main Page</a>
<center>
	<h1>BOOKED VEHICLE DETAILS</h1>
		
	<div class = "contaner">
		
			<table>
				<tr>
					<th> Vehicle ID </th>
					<th> Brand </th>
					<th> Vehicle Name </th>
					<th> Booking ID </th>
					<th> B_Status </th>
					<th> Customer ID </th>
					<th>Customer Details</th>
						
				</tr>
			
			
			
	
	
	
	<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,'mydb');
		
		
			$query = "select * 
from c_booking_details inner join c_vehicle
on c_booking_details.Vehicle_id = c_vehicle.Vehicle_id;
";
			$query_run = mysqli_query($connection,$query);
			
			

			while($row = mysqli_fetch_array($query_run))
			{
				
				?>
				<tr>
				  <td> <?php echo $row['Vehicle_id']; ?></td>
				  <td> <?php echo $row['Brand']; ?></td>
				  <td> <?php echo $row['Vehicle_name']; ?></td>
				  <td> <?php echo $row['Booking_id']; ?></td>
				  <td> <?php echo $row['Booking_status']; ?></td>
				  <td> <?php echo $row['Customer_id']; ?></td>
				  <?php  echo "<td>
				    <a href=customerV.php?stuID=".$row ['Customer_id'] ?>
					<button type="button">
					<input type="submit" value = "CLICK TO VIEW">
					</button>
					</a>
					</td>
				 	
				</tr>
				  <?php
			}
			?>
					
				<?php
			
		
		
		
	?>
	</div>
	</center>
</body>
</html>

