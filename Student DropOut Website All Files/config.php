<?php
//MYSQLi object-orianted
$servername = "localhost";
$username = "root";
$password = "";


//creating connection:
$con = new MYSQLi($servername,$username,$password="");
//checking connection
if(MYSQLi_connect_error())
{
    die("Database connection failed!");
}
else
{
    echo"Connected successfully!";
}
?>