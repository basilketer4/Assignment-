<!doctype html>
<html>
 <head>
 <h1>insert data into our table
 </head>
 <body>
 <center>
 <?php
 //call your database file into the current file
 require "dbconnect.php";
 //pick data from the user
 $firstname = $_REQUEST['first_name'];
 $lastname = $_REQUEST['last_name'] ;
 $gender = $_REQUEST['gender'];
 $address = $_REQUEST['password'] ;

 //insert data picked into the table
 $sql = "insert into staff values('$firstname', '$lastname', '$gender', '$library')";
 if($conn -> query($sql) === true) {
 echo " records inserted" ;
 }else {
 echo "error";
 }
 ?>
 </center>
 </body>
</html>
Dbconnect.php
<?php
$servername = "localhost"; //name of your server
$user = "root" ; // the user created on your server while installing xampp/wamp
$password = "" ; // the password set while installing xampp/wamp. leave it empty like mine if you set no password
at installation
$DATABASE_NAME = "library" ; //name of the databse you created
//create connection
$conn = new mysqli( $servername, $user, $password, $DATABASE_NAME) ;
?>