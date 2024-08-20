<?php
$name= $_POST['name'];
$email= $_POST['email'];

//database connection

$conn= new mysqli('localhost','root','','information');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into registration(name,email) values(?,?)");
    $stmt->bind_param("sssssi",$name,$email);
    $stmt->execute();
    echo "Thank you for the information!!";
    $stmt->close();
    $conn->close();
}
?>