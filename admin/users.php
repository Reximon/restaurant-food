<?php require_once 'includes/navigation.php' ?>
<section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text"> Usuarios</span>
        </div>
        
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Puesto</th>
                <th>Fecha Registro</th>
            </tr>
        </thead>
        <tbody>

        <?php 
            $usuarios = conseguirUsuarios($db);
            if(!empty($usuarios)):
                while($usuario = mysqli_fetch_assoc($usuarios)):

        ?>
            <tr>
                <td><?=$usuario['nombre'] ?></td>
                <td><?=$usuario['apellidos'] ?></td>
                <td><?=$usuario['email']?></td>
                <td><?=$usuario['puesto']?></td>
                <td><?=$usuario['fecha']?></td>
            </tr>

        <?php
                endwhile;
            endif;

        ?>
        </tbody>
    </table>
    <script>
    
        $(document).ready(function() {
    $('#example').DataTable( {
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ],
            "language": {
        "search": "Buscar: ",
        "decimal":        "",
        "emptyTable":     "No hay datos disponibles en la tabla",
        "info":           "Mostrando _START_ de _END_ de _TOTAL_ entradas",
        "infoEmpty":      "Mostrando 0 de 0 de 0 entradas",
        "infoFiltered":   "(mostrando del _MAX_ total de entradas)",
        "zeroRecords":    "No hemos encontrado nada",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "Mostrando _MENU_ entradas",
        "loadingRecords": "Cargando...",
        "processing":     "Procesando...",
        "paginate": {
        "first":      "Primero",
        "last":       "Último",
        "next":       "Siguente",
        "previous":   "Anterior"
    },
    }
    } );
    } );
    </script>
    </section>
<?php require_once 'includes/bottom.php' ?>
