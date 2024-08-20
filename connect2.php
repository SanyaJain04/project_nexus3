<?php
$name= $_POST['name'];
$email= $_POST['email'];
$rating= $_POST['rating'];
$feedback= $_POST['feedback'];

//database connection

$conn= new mysqli('localhost','root','','information2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into registration(name,email,rating,feedback) values(?,?,?,?)");
    $stmt->bind_param("sssssi",$name,$email,$rating,$feedback);
    $stmt->execute();
    echo "Thank you for the feedback!!";
    $stmt->close();
    $conn->close();
}
?>