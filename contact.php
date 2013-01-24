<?php
/*
contact.php
to add the contact in DB and send mail to DC support
*/
include('class.phpmailer.php');
include('class.smtp.php');
$email=NULL;
$location=NULL;
$time=NULL;
$message=NULL;
$mail_sent=0;
$result=array();
if($_POST['name']!=NULL && $_POST['skype']!=NULL)
{
	$name=$_POST['name'];
	$skype=$_POST['skype'];
}
else
{
	$result['success']=-1;
	$result['msg']='Invalid params';
	echo json_encode($result);
	exit;
}

if(isset($_POST['location']))
{
	$location=$_POST['location'];
}
if(isset($_POST['time']))
{
	$time=$_POST['time'];
}
if(isset($_POST['message']))
{
	$message=$_POST['message'];
}
if(isset($_POST['email']))
{
	$email=$_POST['email'];
}
$mail_subject = 'New Enquiry - Digital Chakra';
$mail_message = 'Name : '.$name.'<br />'.'Email: '.$email.'<br />Message: '.$message.'<br />Skype/Phone: '.$skype.'<br />Time to call: '.$time.'<br />Location: '.$location;
if (smtpmailer('queries@digitalchakra.in', 'webmaster.digitalchakra@gmail.com', 'Admin', $mail_subject, $mail_message))
{
	$mail_sent=1;
}
$con=mysql_connect('localhost','root','password');
$db=mysql_select_db('dc');
$query="INSERT INTO `tbl_contact` (`name`, `email`, `message`, `skype`, `call_time`, `location`, `mail_sent`) VALUES ('$name', '$email', '$message', '$skype', '$time', '$location', '$mail_sent')";
if(mysql_query($query))
{
	$result['success']=1;
}
else
{
	$result['success']=-1;
	$result['msg']='Failed';
}
echo json_encode($result);

function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->Username = 'webmaster.digitalchakra@gmail.com';  
	$mail->Password = '#digitalchakra123';           
	$mail->SetFrom($from, $from_name);
	$mail->IsHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		return false;
	} else {
		return true;
	}
}
?>
