<?php
require('connection.inc.php');
require('functions.inc.php');
$to=$_POST['atindersinfg137@gmail.com'];
$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$subject=get_safe_value($con,$_POST['subject']);
$mobile=get_safe_value($con,$_POST['mobile']);
$comment=get_safe_value($con,$_POST['message']);
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into contact_us(name,email,mobile,comment,added_on) values('$name','$email','$mobile','$comment','$added_on')");
mail($to,$email,$subject,$comment);
	
echo "Thank you";
?>