<?php
include_once "connection.php";
$date=$_GET['date'];
$select=mysqli_query($conn,"SELECT * FROM `candidate` WHERE ExamDate='$date'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/register_candidates.css?v=1.8">
	<link rel="stylesheet" href="../css/List_of_all_candidated.css">
</head>
<body>
<?php include_once "exam_date_report.php"?>

<div class="displayed">
		<table>
			<tr>
				<th>National Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Date Of Berith</th>
				<th>Exam Date</th>
				<th>Phone Number </th>
			</tr>

<?php
$select=mysqli_query($conn,"SELECT * FROM `candidate` WHERE ExamDate='$date'");
if(mysqli_num_rows($select)>0){
	
while($row=mysqli_fetch_array($select)){
	$nationalid=$row['CandidateNationalId'];
	$FirstName=$row['FirstName'];
	$LastName=$row['LastName'];
	$Gender=$row['Gender'];
	$DOB=$row['DOB'];
	$ExamDate=$row['ExamDate'];
	$PhoneNumber=$row['PhoneNumber'];
	echo "
	
	<tr>
	<td>$nationalid</td>
	<td>$FirstName</td>
	<td>$LastName</td>
	<td>$Gender</td>
	<td>$DOB</td>
	<td>$ExamDate</td>
	<td>$PhoneNumber</td>
</tr>
	";
}
}else{
	echo ""
}
?>
 
		</table>
	
</body>
</html>