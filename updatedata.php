<?php include("connection.php");?>
<?php include("variable.php");?>

<?php

$sid = (int)$_POST['sid'];

$query = "UPDATE student set sname ='$name',saddress = '$address',sclass = $class,sphone = '$mobile' WHERE sid = $sid;";

mysqli_query($conn,$query);

header("Location:read.php");
?>