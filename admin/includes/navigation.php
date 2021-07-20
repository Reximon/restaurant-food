<?php   require_once '../objects/includes/conexion.php'; 
        require_once '../admin/helpers/function.php';
        require_once './helpers/reedireccion.php';

    ob_start();
    error_reporting(0);

    $db_conx = mysqli_connect("localhost", "root", "", "restaurant");

    if (mysqli_connect_errno()) {
        echo mysqli_connect_error("Nuestra base de datos está caída ahora mismo");
        exit();
    }
    $months = array();

    $contador = array();


    $count = 0;

    $sql =  mysqli_query($db_conx, "SELECT COUNT(*) AS contador, 
    MONTH(fecha) AS mes
    FROM pedidos
    WHERE YEAR(fecha)= 2021
    GROUP BY MONTH(fecha)
    ORDER BY MONTH(fecha) ASC;");

    while ($row = mysqli_fetch_array($sql)){
        $contador[] = round($row = $row['contador'], 1);
        $count = $count +1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard ƒood</title>
    <link rel="icon" href="..\assets\img\pizza.svg">

    <!-- Boxi Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
</head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-pizza'></i>
            <span class="logo__name">ƒood<span class="point">.</span></span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin">
                    <i class='bx bxs-tachometer'></i>
                    <span class="link__name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link__name" href="admin">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="reserva">
                        <i class='bx bx-book-add' ></i>
                        <span class="link__name">Reservas</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow" ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link__name" href="reserva">Reservas</a></li>
                    <li><a href="#">Reservas</a></li>
                    <li><a href="#">Mesas</a></li>
                    <li><a href="#">Horarios</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-line-chart-down' ></i>
                        <span class="link__name">Estadística</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow" ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link__name" href="#">Estadística</a></li>
                    <li><a href="#">Reservas</a></li>
                    <li><a href="#">Horas</a></li>
                    <li><a href="#">Horarios</a></li>
                </ul>
            </li>
            <li>
            <li>
                <a href="#">
                    <i class='bx bxs-chat' ></i>
                    <span class="link__name">Mensajes</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link__name" href="#">Mensajes</a></li>
                </ul>
            </li>
            <li>
                <a href="users">
                    <i class='bx bxs-user-detail' ></i>
                    <span class="link__name">Usuarios</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link__name" href="users">Usuarios</a></li>
                </ul>
            </li>
            <li>
                <a href="../objects/helpers/logout.php">
                    <i class='bx bx-log-out' ></i>
                    <span class="link__name">Cerrar Sesión</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link__name" href="../helpers/logout.php">Cerrar Sesión</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    
                    <div class="profile content">
                        <img src="../assets/img/default-user.png" alt="">
                    </div>
                        <div class="name-job">
                            <div class="profile__name"><?= $_SESSION['usuario']['nombre']. ' '.$_SESSION['usuario']['apellidos']; ?></div>
                            <div class="job"><?= $_SESSION['usuario']['puesto']?></div>
                        </div>
                        <a href="../objects/helpers/logout.php">
                            <i class="bx bx-log-out"></i>
                        </a>
                </div> 
            </li>
        </ul>
    </div>