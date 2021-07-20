    <header>
        <a href="index.php#banner" class="logo">ƒood<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="index#banner">Inicio</a></li>
                <li><a href="index#about">Sobre Nosotros</a></li>
                <li><a href="index#menu">Menú</a></li>
                <li><a href="index#expert">Expertos</a></li>
                <li><a href="index#testimonials">Testimonios</a></li>
                <li><a href="index#contact">Contacto</a></li>
                <li><a href="reservas" class="signs">Reservar</a></li>
                <!-- In case exist user / En caso de que exista usuario -->
                    <?php if(isset($_SESSION['usuario'])): ?>
                    <li>    
                        <div class="main_div">
                                <div class="img">
                                    <img src="assets/img/default-user.png" onclick="menuHide();">
                                </div>
                            <div class="menuHover" id="">
                                <h2><?= $_SESSION['usuario']['nombre']. ' '.$_SESSION['usuario']['apellidos']; ?><br><span><?= $_SESSION['usuario']['puesto']?></span></h2>
                                <ul>
                                    <li><i class="fas fa-chart-line"></i><a href="admin/admin">Dashboard</a></li>
                                    <li><i class="fas fa-book"></i><a href="admin/reserva">Reservas</a></li>
                                    <li><i class="fas fa-sliders-h"></i><a href="#">Ajustes</a></li>
                                    <li><i class="far fa-question-circle"></i><a href="#">Ayuda</a></li>
                                    <li><i class="fas fa-sign-out-alt"></i><a href="objects/helpers/logout.php">Cerrar Sesión</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <?php endif; ?>
            </ul>
 
    </header>
