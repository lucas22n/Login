<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "login_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Fallo la conexion";
}