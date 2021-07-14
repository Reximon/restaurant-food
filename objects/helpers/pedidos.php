<?php
    if(isset($_POST)){

        require_once '../includes/conexion.php';

        $pedidos = isset($_POST['encargo']) ? mysqli_real_escape_string($db, $_POST['encargo']) : false;
        $usuario = $_SESSION['usuario'] ['id'];

        // Validación 
        $errores = array();

        var_dump($usuario);

        if(empty($pedidos)){
            $errores['encargo'] = "El encargo no es válido";
        }
        if(count($encargos) == 0){
            if(isset($_POST['encargo'])){
                $usuario_id = $_SESSION['usuario']['id'];
                $sql = "INSERT INTO encargos(usuario_id, comida_id, fecha) VALUES($usuario_id, $comida, CURDATE());";
            }
            $guardar = mysqli_query($db, $sql);
            
            // header("Location: ../index.php");
        }else{
            $_SESSION['errores_entrada'] = $errores;

            if(isset($_GET['editar'])){
                header("Location: ../editar-entrada.php?id=".$_GET['editar']);
            }else{
            header("Location: ../crear-entradas.php");
            }
        }
        
    }