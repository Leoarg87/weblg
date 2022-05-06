<?php
$servername = "localhost";
$database = "proyecto";
$username = "root";
$password = "liceorc4";
$base=new PDO("mysql:host=localhost; dbname=proyecto", "root","liceorc4" );
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con = mysqli_connect($servername, $username, $password, $database);
?>