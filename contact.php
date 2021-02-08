<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "kobac1@mac.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have a message ".$name;".\n\n".$message;

    mail($mailTo, $name, $headers);

    header("Location: index.html?MessageSent");
}

// Database
// $conn = new mysqli('localhost', 'root', '', 'contact_me');
// if($conn->connect_error){
//     die('Connection Failed  : '.$conn->connect_error);
// }else{
//     $stmt = $conn->prepare("insert into registration(name, email, subject, message) 
//         values(?, ?, ?, ?)");
//     $stmt->bind_param("ssss",$name, $email, $subject, $message);
//     $stmt->execute();
//     echo "Message Sent Succusseful...";
//     $stmt->close();
//     $conn->close();
// }
// line 14 the "ssss" stands for the 'string' value for the binded data types
// 'i' is for integer
?>

