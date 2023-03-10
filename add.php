<?php include("connection.php");?>
<?php include("variable.php");?>

<?php

$q = "SELECT sid,mystatus FROM student where sname ='$name' and saddress = '$address' and sclass =$class and sphone = '$mobile'";

$q_result = mysqli_query($conn,$q);

if(mysqli_num_rows($q_result) > 0){

    $row = mysqli_fetch_assoc($q_result);

    if($row['mystatus'] == 0){

        $sid = $row['sid'];
        $query = "UPDATE student set mystatus = 1 WHERE sid = $sid";
        mysqli_query($conn,$query);
        header("Location:read.php");
    }else{
        echo '<script type="text/JavaScript"> alert("Duplicate Entry"); </script>';
        header("Location:index.php");
    }



}else{
    
    $query = "INSERT into student (sname,saddress,sclass,sphone) Values ('$name','$address',$class,'$mobile');";
    mysqli_query($conn,$query);
    
header("Location:read.php");
}


?>