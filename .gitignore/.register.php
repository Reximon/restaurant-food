<?php require_once './includes/header.php'; ?>
        <div class="contentRegister">
            <div class="back">
                <a href="javascript:history.back()"> <i class="fas fa-times"></i></a>
            </div>
            <a href="index.php" class="logo">ƒood<span>.</span></a>
            <header> Registrarse</header>
            <?php 
                    if(isset($_SESSION['completado'])): ?>
                    <div class="alerta alerta-exito">
                        <?= $_SESSION['completado']; ?>
                    </div>
                    <?php elseif(isset($_SESSION['errores'] ['general'])): ?>
                        <div class="alerta alerta-exito">
                        <?= $_SESSION['errores'] ['general']; ?>
                    </div>
                    <?php endif; ?>
            <form action="./helpers/registro.php" method="POST">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="nombre" required placeholder="Nombre...">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
                </div>
                <div class="field space">
                    <span class="fa fa-user-friends"></span>
                    <input type="text" name="apellidos" required placeholder="Apellidos...">
                    
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
                </div>
                <div class="field space">
                    <span class="fas fa-envelope"></span>
                    <input type="text" name="email" required placeholder="Email...">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password" required placeholder="Contraseña..." id="password">
                    <span id="loginShow" class="passwordIcon"> <i class="fas fa-eye"></i> </span>
                    <span id="loginHide" class="passwordIcon"> <i class="fas fa-eye-slash"></i> </span>

                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

                </div>
                <!-- <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password"  required placeholder="Confirma la contraseña..." id="password">
                    <span id="loginShow" class="passwordIcon"> <i class="fas fa-eye"></i> </span>
                    <span id="loginHide" class="passwordIcon"> <i class="fas fa-eye-slash"></i> </span>
                </div> -->
                <div class="req white">
                    <p>Utiliza ocho caracteres como mínimo con una combinación de letras, números y símbolos.</p>
                </div>
                <div class="field">
                    <input type="submit" name="submit" value="Registrarse">
                </div>
                <div class="login">O Registrarse con</div>
                <div class="link">
                    <div class="facebook">
                        <i class="fab fa-facebook-f" style="margin-right: 5px"></i>  Facebook
                    </div>
                    <!-- <div class="google">
                    <i class="fab fa-google-plus-square">&nbsp; Google</i>
                    </div> -->
                    <div class="instagram">
                        <i class="fab fa-instagram" style="margin-right: 5px"></i>  Instagram
                    </div>
                </div>
                <div class="signup">¿Tienes cuenta?
                    <a href="login.php"> Iniciar Sesión ahora</a>
                </div>
                
            </form>
            <?php borrarErrores();?>
        </div>
    </div>
    <script>
        const show = document.querySelector('#loginShow');
        const hide = document.querySelector('#loginHide');
        const idPassword = document.querySelector('#password');
        
        show.addEventListener('click', function(){ 
            show.style.display = "none";
            hide.style.display = "block";
            idPassword.type = "password";
        });
        hide.addEventListener('click', function(){ 
            hide.style.display = "none";
            show.style.display = "block";
            idPassword.type = "text";
        });
    </script>
</body>
</html>