<?php

$con = mysqli_connect(
"localhost",
'root',
"//AKKK4460",
"contact_tbl");

// get the post records/ information
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];