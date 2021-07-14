<?php  
    if(isset($_POST)) {
        require_once '../includes/conexion.php';

        $person = isset($_POST['personas']) ? (int)$_POST['personas'] : false;

        $hours  =   isset($_POST['horas']) ? date("H:i", strtotime($_POST['horas'])) : false;

        $dates =   isset($_POST['fecha']) ? $_POST['fecha'] : false;

        $date = str_replace('/', '-', $dates);

        $newDate = date('Y-m-d', strtotime($date));



        if(!empty($_POST)) {
            $sql = "INSERT INTO pedidos VALUES(null, $person, '$hours', '$newDate'); ";
            
            $guardar = mysqli_query($db, $sql);
            if($guardar == true) {
                header("Location: ../../reservas.php");
            }else{
                echo  "Error en la reserva";
                header("Location: ../../reservas.php");
            }
        }
    }