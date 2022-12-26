<?php
//echo ("Connected");
$server="localhost";
$username="root";
$password="";
$dbname="gauranga";
$conn=new mysqli($server,$username,$password,$dbname);
if(!$conn){
   echo ("die");
}
else{
//   echo ("successful");
}
?>