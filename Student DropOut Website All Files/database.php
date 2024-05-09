<?php
include_once 'config.php';
//creating database
$sql = "create database  DROPOUT_DATA";
if($con->query($sql) === TRUE)
{
    echo"Database creates successfully";
}
else
{
    echo"Error in database creating!";
}
