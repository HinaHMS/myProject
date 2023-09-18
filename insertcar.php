<?php
//if(isset($_POST['submit'])){
$cid = $_POST['c_id'];
$nm = $_POST['nm'];
$em = $_POST['em'];
$dob = $_POST['dob'];
$occ = $_POST['occ'];
$add = $_POST['add'];
$lisc = $_POST['lisc'];

$ctype = $_POST['ctype'];
$pkupl = $_POST['pkupl'];
$dpofl = $_POST['dpofl'];
$pkupd = $_POST['pkupd'];
$dpofd = $_POST['dpofd'];
$seats = $_POST['seats'];

$vid = $_POST['vid'];
$bd = $_POST['bd'];
$vn = $_POST['vn'];
$cost = $_POST['cost'];
$av = $_POST['av'];
$mile = $_POST['mile'];

 
$bs = "Booked";
$total = $cost*2;


$dbconnect = mysqli_connect('localhost','root','','mydb');


$sql = mysqli_query($dbconnect,"insert into c_customer (Customer_id,Customer_name,Customer_email,Customer_DOB,Customer_occupation,Customer_address,Customer_licenseNO) VALUES ('$cid','$nm', '$em','$dob','$occ','$add','$lisc')");


if ($sql) {
    echo "Record inserted successfully";
} 
else {
    echo "Error: ";
}


$sqlR = mysqli_query($dbconnect,"insert into c_requirements (car_type,pick_up_location,drop_off_location,pick_up_date,return_date,total_seats) VALUES ('$ctype','$pkupl','$dpofl','$pkupd','$dpofd','$seats')");

if ($sqlR) {
    echo "Record inserted successfully";
} 
else {
    echo "Error: ";
}


$sqlV = mysqli_query($dbconnect,"insert into c_vehicle (Vehicle_id,Brand,Vehicle_name,car_type,total_seats,Per_day_cost,Availability,Meter_Reading) VALUES ('$vid', '$bd','$vn','$ctype','$seats','$cost','$av','$mile')");
if ($sqlV) {
    echo "Record inserted successfully";
} 
else {
    echo "Error: ";
}

/*
//$cid = mysqli_query($dbconnect, "SELECT Customer_id FROM c_customer WHERE Customer_email = '$em';");
//$row = mysql_fetch_array($cid);
//echo $cid;
//$get_teacher_arr = mysqli_fetch_array($get_teacher);
$getinfo = "select * from c_customer where Customer_email='$em';";

$query = mysqli_query($getinfo, $dbconnect);
if(!$query) {
    echo'something went wrong.';
} else {
    $c_id = mysql_fetch_object($query, 'Customer_id');
	echo $c_id;
    //$lastname = mysql_fetch_object($query, 'user_lastname');
}
*/
 
$sqlBK = mysqli_query($dbconnect,"insert into c_booking_details (Booking_status,Total_amount,Customer_id,Vehicle_id) VALUES ('$bs', '$total','$cid','$vid')");
if ($sqlBK) {
    echo "Record inserted successfully";
} 
else {
    echo "Error: ";
}

$sqlBL = mysqli_query($dbconnect,"insert into c_billing (Bill_date,Total_amount,Customer_id) VALUES ('$pkupd', '$total','$cid')");
if ($sqlBL) {
    echo "Record inserted successfully";
} 
else {
    echo "Error: ";
}
//}
?>