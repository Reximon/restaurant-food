<?php
// Iniciar la sesión y la conexión a BBDD
include '../includes/conexion.php';
// Recojer los datos del formulario
if(isset($_POST)){

    // Borrar error antiguo
    if(isset($_SESSION['errores'])){
        session_unset($_SESSION['errores']);
    }

    // Recojer datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    
 

    // Consulta  para comprobar las credenciales del usuario
    $sql = "SELECT * FROM `usuarios` WHERE email = '$email';";
    $login = mysqli_query($db, $sql);
    
    // Comprobar la contraseña / cifrar
    if($login && mysqli_num_rows($login) > 0){

        $usuario = mysqli_fetch_assoc($login);

        $verify = password_verify($password, $usuario['password']);

    
        if($verify == true){
            // Utilizar una sesión para guardar los datos del usuario logeado
            $_SESSION['usuario'] = $usuario;

            header('Location: ../../admin/admin');

            if(isset($_SESSION['error_login'])){
                    session_unset($_SESSION['error_login']);
                }
        }else{
            // Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = "Login Incorrecto";
            header('Location: ../../admin/index');
        }
    }else{
        // mensaje error
        $_SESSION['error_login'] = "Login Incorrecto";
        header('Location: ../../admin/index');
    }

}

