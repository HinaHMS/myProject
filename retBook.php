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
	<title> Customer Billing Information </title>
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
<a href="retrcar.php" class="btnmain" >Back to Customer Details</a>
<center>
	<h1>CUSTOMER BOOKING DETAIL</h1>
		
	<div class = "contaner">
		
			<table>
				<tr>
					<th> Bill_ID </th>
					<th> Bill Date </th>
					<th> Total Amount </th>
				</tr>
			
			
			
	
	
	
	<?php
	$id=$_GET['stuID'];
	//echo $id; 
	
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,'mydb');
		
		
			$query = "select * from c_billing where Customer_id = $id ";
			$query_run = mysqli_query($connection,$query);
			while($row = mysqli_fetch_array($query_run))
			{
				?>
				<tr>
				  <td> <?php echo $row['Bill_id']; ?></td>
				  <td> <?php echo $row['Bill_date']; ?></td>
				  <td> <?php echo $row['Total_amount']; ?></td>
				  	
				</tr>
				<?php
			}
		
		
	?>
	
	</div>
	</center>
</body>

</html>

