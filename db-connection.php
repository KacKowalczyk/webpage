<?php
$db = mysqli_connect("localhost","user","admin", "nmgym");

if(!$db)
{
    die("Connection Failed: " . mysqli_connect_error());
}
?>