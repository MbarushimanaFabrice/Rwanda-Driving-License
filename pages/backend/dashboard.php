<?php
session_start();
$username=$_SESSION['myusername'];
if(isset($username)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../image/about pc.PNG">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css?v=1.4">
</head>
<body>
    <div class="container">
        <div class="rightsider">
            <ul>
                <li><a href="">Dashboard</a></li>
                <li><a href="register_candidates.php">Register Candidates</a></li>
                <li><a href="List_of_all_candidated.php">List of Candidates</a></li>
                 <li><a href="exam.php">Exam</a></li>
                 <li><a href="passed.php">Passed</a></li>
                <li><a href="failed.php">Failed</a></li>
                <li><a href="report.php">Report</a></li>
            </ul>

        </div>
        <div class="leftsider">

       
        <div class="icon">
            <img src="../image/login.png" alt="">
        </div>
        <div class="sidebar">

        </div>

        <div class="part1">
            <div class="card1">
                <h2>Total Candidates</h2>
                <h3 class="viewed">12</h3>
            </div>
            <div class="card1">
                <h2>Passed Candidates</h2>
                <h3 class="viewed">12</h3>
            </div>
        </div>
        
        <div class="part1">
            <div class="card1">
                <h2>Failed Candidates</h2>
                <h3 class="viewed">12</h3>

            </div>
            <div class="card1">
                <h2>Failed Removed</h2>
                <h3 class="viewed">12</h3>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

<?php
}else{
    header("location:../../index.php");
}




?>