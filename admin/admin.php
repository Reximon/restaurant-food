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
<?php require_once 'includes/bottom.php' ?>