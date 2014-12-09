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
$subject ="Artist Registration";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$instrument = $_POST['instrument'];
$genre = $_POST['genre'];
$message = "New Vivifi Artist Application:\n\n  Name: $firstname $lastname\n  Email: $from\n  Instrument: $instrument\n  Genre: $genre";
 
/* GET File Variables */ 
$attachment = $_FILES['attachment']['tmp_name']; 
$fileType = $_FILES['attachment']['type']; 
$fileName = $_FILES['attachment']['name']; 
$fileSize = $_FILES['attachment']['size'];
 
/* Start of headers */ 
$headers = "From: $from"; 

if (file($attachment)) { 
if(($fileType == "audio/mp3") && ($fileSize < 2097152 )){
  /* Reading file ('rb' = read binary)  */
  $file = fopen($attachment,'rb'); 
  $data = fread($file,filesize($attachment)); 
  fclose($file); 
 
  /* a boundary string */
  $randomVal = md5(time()); 
  $mimeBoundary = "==Multipart_Boundary_x{$randomVal}x"; 
 
  /* Header for File Attachment */
  $headers .= "\nMIME-Version: 1.0\n"; 
  $headers .= "Content-Type: multipart/mixed;\n" ;
  $headers .= " boundary=\"{$mimeBoundary}\""; 
 
  /* Multipart Boundary above message */
  $message = "This is a multi-part message in MIME format.\n\n" . 
  "--{$mimeBoundary}\n" . 
  "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . 
  "Content-Transfer-Encoding: 7bit\n\n" . 
  $message . "\n\n"; 
 
  /* Encoding file data */
  $data = chunk_split(base64_encode($data)); 
 
  /* Adding attchment-file to message*/
  $message .= "--{$mimeBoundary}\n" . 
  "Content-Type: {$fileType};\n" . 
  " name=\"{$fileName}\"\n" . 
  "Content-Transfer-Encoding: base64\n\n" . 
  $data . "\n\n" . 
  "--{$mimeBoundary}--\n"; 
}else{
echo '<script> window.location = "fileupload_error.html";</script> ';
}}

$flgchk = mail ("$to", "$subject", "$message", "$headers"); 
 
if($flgchk){ 
echo '<script> window.location="thank_you.html";</script> ';
 }
 else{
echo '<script> window.location = "error.html";</script> ';
}