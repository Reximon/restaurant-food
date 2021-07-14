<?php require_once 'objects/includes/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php setlocale(LC_TIME, 'es_ES');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ƒood | Profile</title>
    <link rel="stylesheet" href="assets/css/pedidos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Rotten_Tomatoes.svg/139px-Rotten_Tomatoes.svg.png">
    <script src="https://use.fontawesome.com/c30e3fc8be.js"></script>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile-card">
                <a href="profile.php"><img src="img/expert1.jpg" class="profile" height="100"></a>
                <h2><?= $_SESSION['usuario']['nombre'].' <span style="color: #ff0157; font-weight: bolder; ">'.$_SESSION['usuario']['apellidos'].'</span>'; ?><br><span>Miembro</span></h2>
                <ul>
                    <li><a href="index.php"> <i class="fas fa-home" style="margin-right: 10px;"></i> Inicio</a></li>
                    <li><a href="profile.php"><i class="fas fa-user" style="margin-right: 10px;"></i>  Perfil</a></li>
                    <li><a href="pedidos.php"><i class="fas fa-shopping-basket" style="margin-right: 10px;"></i> Pedidos</a></li>
                    <li><a href="#"><i class="far fa-question-circle" style="margin-right: 10px;"></i> Soporte</a></li>
                </ul>
            </div>
        </div>
        <main>
            <div class="header">
                <h2>¡Bienvenido a <a href="index.php" class="logo">ƒood</a>!<span class="fecha"><?php echo strftime("%H:%M %A, %d de %B de %Y"); ?> </span>
                </h2>

            </div>