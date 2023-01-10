<?php
$db = mysqli_connect("localhost","user","admin","NMGYM");

if(!$db)
{
    die("Connection Failed: " . mysqli_connect_error());
}
?>