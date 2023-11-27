<?php
function update($tema){
    include 'conexion.php';
    $consulta = "UPDATE alumnos SET interes='".$tema."' WHERE nombre='".$user."'";
    mysqli_query($connection,$consulta);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $interes=$_POST['interes'];
    update($interes);
    header("Location: areas_interes.php");
    exit();
}
?>