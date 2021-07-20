<?php   require_once './objects/includes/conexion.php'; 
        require_once './objects/helpers/errores.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ƒood | Main Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/navigation.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="icon" href="assets\img\pizza.svg">
    <script>
        window.addEventListener('scroll', function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });
        
        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');

            menuToggle.classList.toggle('activo');
            navigation.classList.toggle('activo');
        }

        function menuHide(){
    
            let menu = document.querySelector(".menuHover");
                menu.classList.toggle("ready")
            }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollTrigger.min.js"></script>

</head>
<body>
    <!-- Cabecera y todo -->
        <?php require_once 'objects/includes/index/navigation.php'; ?>
        <?php require_once 'objects/includes/index/banner.php'; ?>
    <!-- Sobre Nosotros -->
        <?php require_once 'objects/includes/index/aboutus.php'; ?>

    <!-- Menú -->
        <?php require_once 'objects/includes/index/menu.php'; ?>

    <!-- Expertos -->
        <?php require_once 'objects/includes/index/experts.php'; ?>

    <!-- Testimonios -->
        <?php require_once 'objects/includes/index/testimonials.php'; ?>

    <!-- Contacto -->
        <?php require_once 'objects/includes/index/contact.php'; ?>


</div>  
<a href="#" class="scrollup" id="scroll-up">
    <i class="fas fa-arrow-up scrollup__icon"></i>
</a>
<script>
Splitting(); 

ScrollOut({  
  threshold: .2,
  once: true
});
</script>
<!-- SCRIPT DE GSAP Imágenes -->
<script>
    // usage:
    batch(".titleText, .box, .menu__card", {
    interval: 0.1, // time window (in seconds) for batching to occur. The first callback that occurs (of its type) will start the timer, and when it elapses, any other similar callbacks for other targets will be batched into an array and fed to the callback. Default is 0.1
    batchMax: 3,   // maximum batch size (targets)
    onEnter: batch => gsap.to(batch, {autoAlpha: 1, stagger: 0.15, ease: 'linear', overwrite: true}),
    onLeave: batch => gsap.set(batch, {autoAlpha: 0, overwrite: true}),
    onEnterBack: batch => gsap.to(batch, {autoAlpha: 1, stagger: 0.15, overwrite: true}),
    onLeaveBack: batch => gsap.set(batch, {autoAlpha: 0, overwrite: true})
    // you can also define things like start, end, etc.
    });




    // the magical helper function (no longer necessary in GSAP 3.3.1 because it was added as ScrollTrigger.batch())...
    function batch(targets, vars) {
    let varsCopy = {},
        interval = vars.interval || 0.1,
        proxyCallback = (type, callback) => {
            let batch = [],
                delay = gsap.delayedCall(interval, () => {callback(batch); batch.length = 0;}).pause();
            return self => {
            batch.length || delay.restart(true);
            batch.push(self.trigger);
            vars.batchMax && vars.batchMax <= batch.length && delay.progress(1);
            };
        },
        p;
    for (p in vars) {
        varsCopy[p] = (~p.indexOf("Enter") || ~p.indexOf("Leave")) ? proxyCallback(p, vars[p]) : vars[p];
    }
    gsap.utils.toArray(targets).forEach(target => {
        let config = {};
        for (p in varsCopy) {
        config[p] = varsCopy[p];
        }
        config.trigger = target;
        ScrollTrigger.create(config);
    });
    }
</script>
<script>
// ! SHOW SCROLL UP
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // Cuando el scrol sea más grande que 560 viewport de altura, se añadirá una clase llamada show-scroll a la etiqueta de scroll
    if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)
</script>
</body>
<?php require_once 'objects/includes/footer.php'; ?>
</html>