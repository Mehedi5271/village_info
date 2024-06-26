<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';




 $conn = mysqli_connect('localhost','root','','ullapara');

 $id = $_GET['id'];

 $status = $_GET['status'];
 $email= $_GET['email'];

 $updatequery = "UPDATE post SET status='$status' WHERE id='$id' ";

 mysqli_query($conn,$updatequery);

 
 
 

 $mail=new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host='smtp.gmail.com';
  $mail->SMTPAuth=true;
  $mail->Username='amarullapara@gmail.com';
  $mail->Password='bvhpmaniwzplovcm';
  $mail->SMTPSecure='ssl';
  $mail->Port=465;
  $mail->setFrom('amarullapara@gmail.com');
  $mail->addAddress($email);
  $mail->Subject="Approved";
  $mail->Body=" Hello! Your Post has been Approved";
  $mail->send();
if($mail->send())
{
    echo"send";
}
else{
    echo"not send";
}
 











 header('location:post_show.php');

?>