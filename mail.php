<?php
    $to = "majamalebo620@gmail.com"; 
    $from = $_SERVER['PHP_SELF']." ".$_POST["email"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $headers = "From: $from";
    $message = $_POST["message"];
$conn = new mysqli('localhost', 'root', '', 'contact');
if($conn->connect_error)
{
    die('connection failed : '.$conn->connect_error);
} 
else{
    $body = "User Message \n";
    $body .= " \n\n\t Name: ".$name;
    $body .= " \n\n\t Email: ".$email;
    $body .= " \n\n\t Subject: ".$subject;
    $body .= " \n\n\t Message: ".$message;

 $retval = mail($to, $subject, $body, $headers);

    if($retval == true){
        echo '<label class="success">Sent your <b>e-mail.</b></label>';
    }else{
        echo '<label class="error">Something went wrong! please try again.</label>';
    }
}
    
    ?>