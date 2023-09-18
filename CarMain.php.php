
<?php 

$host="localhost";
$user="root";
$password="";
$db="mydb";

$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db) or die(mysqli_error($con));

if(isset($_POST['abc'])){
	
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
	
	$sql="select st_name,password from user1 where st_name = '".$uname."' and password = '".$password."' limit 1";
	
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==true){
        //echo " You Have Successfully Logged in";
		header("Location:car2.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

<!DOCTYPE html>
<html>

<head>

	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

</style>
<body>
<link rel="stylesheet" a href="style.css">
	<div class="container">
	
	<img src="c2.png" >
		<form action = "" method = "POST">
		
			<div class="form-input">
				<input id = "username" type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input id = "password" type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" name = "abc" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>