<?php
$servername="localhost";
$username="root";
$db="military system";
$password="";

//create connection
$conn = new mysqli($servername, $username, $password,$db);

//check connection
if ($conn->connect_error){
die("connection failed:" .$conn->connect_error);
}

$s = $_POST["scode"];
$a = $_POST["acode"];

$result=mysqli_query($conn,"select * from loginpage where s_code='$s' and a_code='$a';") or die ("Failed".mysqli_error($conn));
$row=mysqli_fetch_array($result);
if($row["s_code"]== $s && $row["a_code"] == $a ){
echo "OTP will be generated".$row['s_code'].$row['a_code'];

}
else{
echo"Failed";
}    
?>