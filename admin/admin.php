<?php require_once 'includes/navigation.php' ?>
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text"> Dashboard</span>
        </div>
        <h2 class="logo">ƒood <span class="point">.</span></h2>
            <div class="task-container">
                <div class="card">
                    <h6 class="task__title book-annual">Reservas totales (Año)</h6>
                    
                    <div class="card__container">
                        <p class="task__description">Reservas hechas: 500</p>
                        <i class='bx bx-calendar-alt task__icon'></i>
                    </div>
                </div>
                <div class="card">
                    <h6 class="task__title book-message">Mensajes totales</h6>
                    <div class="card__container">
                        <p class="task__description">Mensajes recibidos: 250</p>
                        <i class='bx bxs-chat task__icon'></i>
                    </div>
                </div>
                <div class="card">
                    <h6 class="task__title book-monthly">Reservas totales (Mes)</h6>

                    <div class="card__container">
                        <p class="task__description">Reservas hechas: 20</p>
                        <i class='bx bxs-book-alt task__icon'></i>
                    </div>
                </div>
                <div class="card">
                    <h6 class="task__title messages-waiting">Mensajes pendientes</h6>
                    <div class="card__container">
                        <p class="task__description">Mensajes totales: 891</p>
                        <i class='bx bxs-message-error task__icon'></i>
                    </div>
                </div>
            </div>
            <div class="graphics-containers">
                <div class="graphic__container dates">
                    <h2 class="graphic__title">Total de Reservas (Fechas) - 2021 <i class='bx bx-filter'></i></h2>
                    <div id="myfirstchart" class="graphic__date"></div>
                </div>

                <div class="graphic__container hours">
                    <h2 class="graphic__title">Total de Reservas (Horas) - 2021 <i class='bx bx-filter'></i></h2>
                    <div id="pie-chart" class="graphic"></div>
                </div>
            </div> 
    </section>
        <!-- SCRIPT DE LA CHART -->
    <script>
        var months = ["Ene", "Feb", "Mar", "Abrl", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
                
            Morris.Line({
                element: 'myfirstchart',
                    data: [{
                        m: '2021-01', // <-- valid timestamp strings
                        a: 10 
                    }, {
                        m: '2021-02',
                        a: 23
                    }, {
                        m: '2021-03',
                        a: 26
                    }, {
                        m: '2021-04',
                        a: 30
                    }, {
                        m: '2021-05',
                        a: 15
                    }, {
                        m: '2021-06',
                        a: 30
                    }, {
                        m: '2021-07',
                        a: 50
                    }, {
                        m: '2021-08',
                        a: 43
                    }, {
                        m: '2021-09',
                        a: 37
                    }, {
                        m: '2021-10',
                        a: 25
                    }, {
                        m: '2021-11',
                         a: 10
                    }, {
                        m: '2021-12',
                        a: 49
                    }, ],
                    xkey: 'm',
                    ykeys: ['a'],
                    ymax: 50, 
                    labels: ['Reservas'],
                    xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
                        var month = months[x.getMonth()];
                        return month;
                    },
                    dateFormat: function(x) {
                        var month = months[new Date(x).getMonth()];
                        return month;
                    },
            });
    </script>
    <!-- SCRIPT DE LA PIECHART -->
    <script>
        Morris.Donut({
        element: 'pie-chart',
        data: [
            {label: "15:30", value: 20},
            {label: "16:00", value: 5},
            {label: "16:30", value: 15},
            {label: "17:00", value: 5},
            {label: "17:30", value: 15},
            {label: "18:00", value: 10},
            {label: "18:30", value: 30},
        ]
        });
    </script>
<?php require_once 'includes/bottom.php' ?>