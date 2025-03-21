<?php
$servername="localhost";
$username="root";
$password="";
$database="contactielts";

$conn=mysqli_connect($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "✅ PHP is receiving the form data!<br>";
  echo "Name: " . $_POST['name'] . "<br>";
  echo "Email: " . $_POST['email'] . "<br>";
  echo "Message: " . $_POST['message'] . "<br>";
} else {
  echo "❌ No POST request detected!";
}
//if(!$conn)
//{
  //  die("Not connect"). mysqli_connect_erroe();
//}
//else
//{
  //  echo "connection sucessful";
//}
//echo "✅ PHP is working!";

//$sql="CREATE DATABASE contactielts";
//$db=mysqli_query($conn,  $sql);

//if ($db) 
//{
  //  echo "Database '$database' created successfully!<br>";
//}
 //else 
//{
  //  echo " Error creating database: " . mysqli_error($conn) . "<br>";
//}

//$sql = "CREATE TABLE submission ( FirstName VARCHAR(7) NOT NULL , Email VARCHAR(5) NOT NULL , Subgect VARCHAR(4) NOT NULL , Messag VARCHAR(4) NOT NULL) ";
//$result = mysqli_query($conn, $sql);
//if($result)
//{
  //  echo" The Table created sucessfuly";
//}
//else
//{
  //  echo" Table was not created";
//}


?>