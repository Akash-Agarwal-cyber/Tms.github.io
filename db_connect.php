<?php
$server="localhost";
$username="root";
$password="";
$database="Users_query";

 $conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
   echo "Database Connection Failure";

}
 ?>