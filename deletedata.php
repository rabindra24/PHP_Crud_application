<?php include("connection.php");?>
<?php include("variable.php");?>

<?php

$sid = (int)$_GET['id'];

$query = "UPDATE student set mystatus = 0 WHERE sid = $sid;";

mysqli_query($conn,$query);

header("Location:read.php");
?>