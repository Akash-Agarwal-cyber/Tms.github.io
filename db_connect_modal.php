<?php
$server="localhost";
$username="root";
$password="";
$database="User_details";

 $conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
   echo "Database Connection Failure";

}
 ?>