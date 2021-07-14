    <header>
        <a href="index.php#banner" class="logo">ƒood<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="index.php#banner">Inicio</a></li>
                <li><a href="index.php#about">Sobre Nosotros</a></li>
                <li><a href="index.php#menu">Menú</a></li>
                <li><a href="index.php#expert">Expertos</a></li>
                <li><a href="index.php#testimonials">Testimonios</a></li>
                <li><a href="index.php#contact">Contacto</a></li>
                <li><a href="reservas#reservas.php" class="signs">Reservar</a></li>
                <!-- In case exist user / En caso de que exista usuario -->
                    <?php if(isset($_SESSION['usuario'])): ?>
                    <li>    
                        <div class="main_div">
                                <div class="img">
                                    <img src="assets/img/default-user.png" onclick="menuHide();">
                                </div>
                            <div class="menuHover" id="">
                                <h2><?= $_SESSION['usuario']['nombre']. ' '.$_SESSION['usuario']['apellidos']; ?><br><span>Miembro</span></h2>
                                <ul>
                                    <li><i class="far fa-user"></i><a href="profile.php">Mi Perfil</a></li>
                                    <li><i class="fas fa-shopping-basket"></i><a href="pedidos.php">Pedidos</a></li>
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
