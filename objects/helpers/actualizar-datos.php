<?php
if(isset($_POST)){

    require_once '../includes/conexion.php';

    // Recojer los valores del formulario de actualización
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

    $apellidos =  isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;

    $email = isset($_POST['email']) ?  mysqli_real_escape_string($db, trim($_POST['email'])) : false;

    var_dump($nombre, $apellidos, $email);
    
    // Array de errores
    $errores = array();
    // Validar los datos antes de guardarlos en la base de datos

        // Nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validate = true;
    }else{
        $nombre_validate = false;
        $errores['nombre'] = "El nombre no es válido";
    }
        // Apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellido_validate = true;
    }else{
        $apellido_validate = false;
        $errores['apellidos'] = "El apellido no es válido";
    }
        // Email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errores['email'] = "El email no es válido";
    }
    $guardar_usuario = false;
    if(sizeof($errores) == 0){
        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;
        
        // Comprobar si el email ya existe

        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
        // Actualizar usuario en la tabla de usuarios de la BBDD
        $sql = "UPDATE usuarios SET ".
                "nombre = '$nombre', ". 
                "apellidos = '$apellidos', ".
                "email = '$email' ". 
                "WHERE id = ".$usuario['id'];

        $save = mysqli_query($db, $sql);

            if($save){
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = "La actualización se ha completado con éxito";
            }else{
                $_SESSION['errores'] ['general'] = "Fallo al actualizar el usuario";
            }
        }else {
            $_SESSION['errores'] ['general'] = "El Usuario ya existe";
        }
    }else{
        $_SESSION['errores'] = $errores;
    }
}
header('Location: ../../profile.php');