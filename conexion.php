<?php
$user = "horacio";
$pass = "horacio";
$host = "localhost";
$connection = mysqli_connect($host, $user, $pass);
$datab = "progweb";
mysqli_select_db($connection,$datab);
$consulta = "SELECT * FROM alumnos WHERE nombre='".$user."'";
$result = mysqli_query($connection,$consulta);
$colum = mysqli_fetch_array($result);
?>