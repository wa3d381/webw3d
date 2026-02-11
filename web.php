<?php
$hi=$_POST['hi'];

//database connection
$conn= new mysqli('localhost','root','','first data base');
if($conn->connect_error){
    die('connection failed : '.$conn->conneect_error);
}else{
    $stmt = $conn->prepare("insert into hi(hi) values(?)");
    $stmt->bind_param("s",$hi);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("location:web2.html");
    exit();
}
?>