<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas en ƒood</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Rotten_Tomatoes.svg/139px-Rotten_Tomatoes.svg.png">
    <link rel="stylesheet" href="assets/css/navigation.css">
    <link rel="stylesheet" href="assets/css/reservas.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
      
      .swal-button  {
        background-color: #ff0157;
      }
      .swal-button:not([disabled]):hover {
        background-color: #ff0056b3;
      }

    </style>
    <script type="text/javascript">

    $(document).ready(function(){
      $('#form__book').on('submit',function(e) {  //Don't foget to change the id form
      $.ajax({
          url:'objects/helpers/reservas-datos.php', //===PHP file name====
          data:$(this).serialize(),
          type:'POST',
          success:function(data){
            //Success Message == 'Title', 'Message body', Last one leave as it is
            swal({
              title: "¡Éxito!",
              text: "Reserva hecha correctamente",
              icon: "success",
              button: "¡Aceptar!",
          });
          },
          error:function(data){
            //Error Message == 'Title', 'Message body', Last one leave as it is
            swal({
                title: "¡Error!",
                text: "Reserva no guardada correctamente",
                icon: "error",
                button: "¡Aceptar!",
            });
          }
        });
        e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
      });
    });
    </script>


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script>
      $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
      };
 $.datepicker.setDefaults($.datepicker.regional['es']);
    $( function() {
      var date = $('#datepicker').datepicker({ dateFormat: 'dd/mm/yy' }).val();
        $( "#datepicker" ).datepicker();
    } );
  </script>

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

    <style>


    </style>
</head>
<body>
<?php require_once 'objects/includes/index/navigation.php' ?>
<section class="container" id="reservas">
    <div class="book__img">
      <img class="book-img" src="./assets/img/img3.jpg" alt="" srcset="">
    </div>
    <form action="objects/helpers/reservas-datos.php" class="form__book" method="POST" id="form__book">
        <h2 class="form__book-title">Reservas</h2>
        <p class="form__book-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <div class="form__book-container">
              <div class="book__flex">
                <div class="form__book-person">
                    <h3 class="form__book-h3">¿<span class="letterCap">C</span>uántas personas?</h3>
                    <div class="custom-select">
                        <select name="personas" id="" required>
                            <option value="1">1 Persona</option>
                            <option value="2">2 Personas</option>
                            <option value="3">3 Personas</option>
                            <option value="4">4 Personas</option>
                            <option value="5">5 Personas</option>
                            <option value="6">6 Personas</option>
                            <option value="7">7 Personas</option>
                            <option value="8">8 Personas</option>
                        </select>
                    </div>
              </div>

              <div class="form__book-hour">
                  <h3 class="form__book-h3 hour">¿<span class="letterCap">A</span>  qué hora?</h3>
                  <div class="custom-select">
                      <select name="horas" id="" required>
                          <option value="-1" selected>Seleccionar</option>
                          <option value="15:30">15:30</option>
                          <option value="16:00">16:00</option>
                          <option value="16:30">16:30</option>
                          <option value="17:00">17:00</option>
                          <option value="17:30">17:30</option>
                          <option value="18:00">18:00</option>
                          <option value="18:30">18:30</option>
                      </select>
                  </div>
                </div>
        </div>
            <div class="form__book-time time">
                <h3 class="form__book-h3">¿<span class="letterCap">Q</span>ué día quieres?</h3>
                <input type="text" id="datepicker" name="fecha" placeholder="Elija una fecha" readonly required>
            </div>
          </div>
            <button class="form__book-submit" type="submit">Reservar</button>  

    </form>

    <div class="contact__book">
      <h1 class="form__book-title contact__title">Contacto</h1>
        <p class="form__book-description mb-0-25"> <i class="fa fa-map-marker" aria-hidden="true"></i> Calle Juan Carlos I S/N, 28982
          Madrid, España  <br><br><a href="tel:+34  666 33 55 00" class="contact__book-link tel"> Teléfono: 666 33 55 00 </a>
              <br>
              <br>
              <a href="mailto:reximon@reximon.com" class="contact__book-link"> reximon@reximon.com</a>
        </p>
      <h1 class="form__book-title contact__title">Horarios</h1>
      <p class="form__book-description">
          Domingo a Miércoles: 13:00h a 17:00h y de 20:00h a 00:30h <br>
          Jueves a Sábado: 13:00h a 17:30h y de 20:00h a 01:30h
      </p>
    </div>

    <div id="map"></div>

</section>
</body>
<script src="assets/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>

<?php require_once 'objects/includes/footer.php' ?>
<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
  /* Look for any elements with the class "custom-select": */
  x = document.getElementsByClassName("custom-select");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /* For each element, create a new DIV that will act as the selected item: */
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* For each element, create a new DIV that will contain the option list: */
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
      /* For each option in the original select element,
      create a new DIV that will act as an option item: */
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
          /* When an item is clicked, update the original select box,
          and the selected item: */
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
      /* When the select box is clicked, close any other select boxes,
      and open/close the current select box: */
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }

  function closeAllSelect(elmnt) {
    /* A function that will close all select boxes in the document,
    except the current select box: */
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }

  /* If the user clicks anywhere outside the select box,
  then close all select boxes: */
  document.addEventListener("click", closeAllSelect);
</script>
</html>
