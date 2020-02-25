<?php

session_start();
    require("conexion.php");
    /* Aqui estamos incluyendo la conexion.php enviadoles las variables usuario y contraseña con el metodo post*/
    $correo = $_POST['mail'];
    $contrasena = $_POST['pass'];
    
    /* La funcion mysql_fetch_Assoc sirve para recuperar datos de las tablas de la base de datos*/
    $login = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo='$correo'");
            if ($fila=mysqli_fetch_assoc($login)){
                if ($contrasena==$fila['contrasena']){
                    $_SESSION['id_usuario'] = $fila['id_usuario'];
                    $_SESSION['correo'] = $fila['correo'];
                }
            }
     if($correo =='correo'){
         header ("Location: index1.1.html");
     }else{
         header ("Location: registro.html");
     }else{
         echo'<script>alert("CONTRASEÑA INCORRECTA")</script>';
         echo"<script>location href = 'registro.html'</script>";
     }else{
         echo'<script>alert("CUENTA NO EXISTENTE, REGISTRATE")</script>';
         echo"<script>location href = 'registro.html'</script>";
     }

?>