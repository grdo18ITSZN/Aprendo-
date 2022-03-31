<?php
include 'conect.php';


if( isset($_POST['Nombre'])){

    //se obtienen los valor de los campos....
    $Nombre=$_POST['Nombre'];
    $Apellido1=$_POST['Apellido1'];
    $Apellido2=$_POST['Apellido2'];
    $Telefono=$_POST['Telefono'];
    $Grado=$_POST['Grado'];
    $Materias=$_POST['Materias'];


    $sql="insert into datospersonales (Nombre, Apellido1, Apellido2, Telefono, Grado, Materias) 
    values('$Nombre','$Apellido1','$Apellido2','$Telefono', '$Grado', '$Materias');";
   
    if (mysqli_query($conn, $sql)) {
        echo "Validaremos tus datos y nos comunicaremos contigo";
     } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
}
else
echo "Nada que guardar...";



?>
<br />
<br />
<a href="index.php">Regresar</a>