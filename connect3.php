<?php
$name= $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$selectservice= $_POST['selectservice'];
$message= $_POST['message'];

//database connection

$conn= new mysqli('localhost','root','','information2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into registration(name,phone,email,selectservice,message) values(?,?,?,?,?)");
    $stmt->bind_param("sssssi",$name,$phone,$email,$selectservice,$message);
    $stmt->execute();
    echo "Thank you for contacting!!";
    $stmt->close();
    $conn->close();
}
?>