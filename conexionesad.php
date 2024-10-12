<?php

    $conexion = mysqli_connect('localhost','root',''.'pqrs') or die(mysql_error($mysqli));  
    
    insertar($conexion)

    function insertar($conexion){
        $loginName = $_POST['LoginName'];
        $loginLastName = $_POST['LoginLastName'];
        $loginPassword = $_POST['LoginPassword'];

        $consulta = "INSERT INTO autorizados(Nombre, Apellido, Contraseña) VALUES ('$loginName', '$loginLastName', '$loginPassword')";
        mysqli_query($conexion ,$consulta);
        mysqli_close($conexion);
    }
?>
