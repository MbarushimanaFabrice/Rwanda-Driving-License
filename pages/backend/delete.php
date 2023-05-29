<?php
include_once "connection.php";

$remove=$_GET['delete'];
 
// $deletion="";

$deletion=mysqli_query($conn,"DELETE FROM `candidate` WHERE PhoneNumber='$remove'");
if($deletion){
	header("location:List_of_all_candidated.php");
}else{
	echo "something wrong";
}



?>