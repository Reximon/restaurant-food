<?php require_once './includes/header.php'; ?>

<div class="content">
            <div class="back">
                <a href="javascript:history.back() | index.html"> <i class="fas fa-times"></i></a>
            </div>
        <a href="index.php" class="logo">ƒood<span>.</span></a>
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
                    <?php if(!isset($_SESSION['usuario'])): ?>
        <div id="login" class="bloque">
                    <?php endif; ?>
                <?php if(isset($_SESSION['error_login'])): ?>
                        <div class="alerta alerta-error" class="bloque">
                            <?= $_SESSION['error_login']?>
                        </div>
                <?php endif; ?>

            <form action="./helpers/loginValidate.php" method="POST">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" required placeholder="Email o Teléfono...">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password"  name="password" required placeholder="Contraseña..." id="password">
                    <span id="loginShow" class="passwordIcon"> <i class="fas fa-eye"></i> </span>
                    <span id="loginHide" class="passwordIcon"> <i class="fas fa-eye-slash"></i> </span>
                </div>
                <div class="pass">
                    <a href="#">¿Contraseña olvidada?</a>
                </div>
                <div class="field">
                    <input type="submit" value="Iniciar Sesión">
                </div>
                <div class="login">O Iniciar Sesión con</div>
                <div class="link">
                    <div class="facebook">
                        <i class="fab fa-facebook-f"> </i>
                    </div>
                    <!-- <div class="google">
                        <img src="./img/google.png" width="18px"> <span style="color: black;">Google</span> 
                    </div> -->
                    <div class="instagram">
                        <i class="fab fa-instagram"> </i>
                    </div>
                </div>
                <div class="signup">¿No tienes cuenta?
                    <a href="register.php"> Registarse ahora</a>
                </div>
                
            </form>
        </div>
    </div>
    <script src="js/ma"></script>
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