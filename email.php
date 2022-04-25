<?php
$msg ="";
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    
    function sendemail($to, $from, $fromName, $body, $attachment){
        $mail = new PHPMailer();
        $mail -> setFrom($from, $fromName);
        $mail -> addAddress($to);
        $mail -> addAttachment($attachment);        
        $mail -> Subject = "Contact From - Email";
        $mail -> Body = $body;
        $mail -> isHTML(isHtml:false);

        return $mail -> send();
    }
    $name = $_POST ["username"];
    $email =$_POST ["email"];
    $body = $_POST ["body"];
    
    $file = "attachment/" .basename ($_FILES["attachment"]["name"]);
    // echo "<pre>";
    // print_r($_FILES); // to see the details of file we are attaching.
    if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $file)){
        if (sendemail(to: "aliana@gmail.com", $email , $name, $body, $file));
        $msg = "Email sent!";
        else
            $msg = "Email failed!"
        
    }else{
        $msg = "Please check your attachment";
    }
}
?>