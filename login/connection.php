<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "table";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
