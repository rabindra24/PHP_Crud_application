<?php include("connection.php");?>

<?php

$sid = (int)$_POST['sid'];

$query = "UPDATE student set mystatus = 0 WHERE sid = $sid;";

mysqli_query($conn,$query);

header("Location:read.php");
?>