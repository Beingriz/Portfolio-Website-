<?php
require_once "connection.php";
if(isset($_POST['submit']))
{

  $id ="132423";
  $name = trim($_POST["name"]);
  $email = trim($_POST['email']);
  $subject = trim($_POST['subject']);
  $message = trim($_POST['message']);
$sql = "Insert into contact_form values('$id','$name','$email','$subject','$message')";
$rec = mysqli_query($conn, $sql);
if ($rec){
  echo "Data Saved";
 }
else
{
  echo "Failed";
}
}

mysqli_close($conn);

?>