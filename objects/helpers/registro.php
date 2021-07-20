<?php
if(isset($_POST)){

    require_once '../includes/conexion.php';

    if(!isset($_SESSION)){
        session_start();
    }

    // Recojer los valores del formulario de registro
    $nombre = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false;

    $apellidos =  isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;

    $email = isset($_POST['email']) ?  mysqli_real_escape_string($db, trim($_POST['email'])) : false;

    $position = isset($_POST['position']) ?  mysqli_real_escape_string($db, trim($_POST['position'])) : false;


    $password = isset($_POST['password']) ?  mysqli_real_escape_string($db, trim($_POST['password'])) : false;

    
    

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
    // Localidad
    if(!empty($position) && !is_numeric($position) && !preg_match("/[0-9]/", $position)){
        $position_validate = true;
    }else{
        $position_validate = false;
        $errores['position'] = "El cargo puesto no es válido";
    }
        // Email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errores['email'] = "El email no es válido";
    }
        // Contraseña
    if(!empty($password)){
        $password_validate = true;
    }else{
        $password_validate = false;
        $errores['password'] = "La contraseña no es válida";
    }

    $guardar_usuario = false;

    if(sizeof($errores) == 0){
        $guardar_usuario = true;

        // Cifrar la contraseña
        $password_secure = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

        // Insertar usuario en la tabla de usuarios de la BBDD
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$position', '$password_secure', CURDATE());";

        $save = mysqli_query($db, $sql);

            if($save){
                $_SESSION['completado'] = "El registro se ha completado con éxito";
            header('Location: ../../admin/index');
            }else{
                $_SESSION['errores'] ['general'] = "Fallo al guardar el usuario";
                header('Location: ../../admin/index');
            }
        }else{
        $_SESSION['errores'] = $errores;
        header('Location: ../../admin/index');

    }
}