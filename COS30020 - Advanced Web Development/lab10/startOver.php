<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="STUID" />
    <title>Hit Counter</title>
</head>

<body>
<h1>Count StartOver</h1>



<?php
require_once 'hitCounter.php';

// Read connection details from mykeys.txt file
$filename = "../../data/lab10/mykeys.txt";
if (file_exists($filename)) {
    include $filename;
} else {
    $host = "";
    $user = "";
    $pswd = "";
    $dbnm = "";
}

// Create HitCounter object and connect to database
$Counter = new HitCounter($host, $user, $pswd, $dbnm, "hitcounter");

// Call member functions of HitCounter class
$Counter->startOver();
$Counter->closeConnection();
?>
<p><a href="./countvisits.php"> Count Visit </a></p></br>

</body>
</html>