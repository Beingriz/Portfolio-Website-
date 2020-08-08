<?php
  /* 
  This is to create connection with mysql Database
  */
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'resume');
 
/* This is to check the connestion establish*/
 $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

 /*Chek Connection */
if ($conn == false)
{
  die("Error:  Cannot Connect to Database");
}
else
{
  echo "Connection Successfull";
}
 
/*
  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
  */
?>