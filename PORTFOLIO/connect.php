<?php
//for getting the form data we have to specify the form input field name
$fullname = $_POST['fullname'];
$email =  $_POST['email'];
$mobile =  $_POST['mobile'];
$address =  $_POST['address'];

//we have to save this data into the database
//we have to do the database connection
 $conn = new mysqli('localhost','root','contact_details','malathi');
 if($conn->connect_error){
    die('connection Failed :'.$conn->connect_error);
 }
 else{
    $stmt = $conne->prepare("insert into contact form(fullname,email,mobile,address)
    values(?,?,?,?)");
    $stmt->bind_param("ssis",$fullname,$email,$mobile,$address);
    $stmt ->execute();
    echo "Sent successfully...";
    $stmt->close();
    $conn->close();
 }
?>
