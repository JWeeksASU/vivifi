<!--
Project Vivi-Fi 
CIS440
Nick Muscara
Alex Lepak
Jason Weeks
Jessa Short
Justin Choi
Christian Valenty
-->
<?php

$to = 'admin@vivifievents.com';
$from = $_POST['from']; 
$subject ="Event Planner Registration Form";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$company = $_POST['company'];
$consider = $_POST['consider'];
$message = "New Vivifi Event Planner Application:\n\n Name: $firstname $lastname\n Email: $from\n Company: $company\n Message: $consider\n";
  
$headers = "From: $from"; 
 
$flgchk = mail ("$to", "$subject", "$message", "$headers"); 
 
if($flgchk){ 
echo '<script> window.location="thank_you.html";</script> ';
 }
else{
echo '<script> window.location="fileupload_error.html";</script> ';
}
?>