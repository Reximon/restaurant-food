<?php 
function conseguirUsuarios($db){

    $sql = "SELECT * FROM usuarios ORDER BY id;";

    $usuario = mysqli_query($db, $sql);

    $result = array();

    if ($usuario && mysqli_num_rows($usuario) >= 1)  {
        $result  = $usuario;
    }
    return $usuario;
}

function conseguirReservas($db) {
    
    $sql =  "SELECT COUNT(*) AS contador, 
            MONTH(fecha) AS mes
            FROM pedidos
            WHERE YEAR(fecha)= 2021
            GROUP BY MONTH(fecha)
            ORDER BY MONTH(fecha) ASC;";  //"SELECT * FROM pedidos where fecha BETWEEN '2021-01-01' AND '2021-12-31';" SELECT * FROM pedidos WHERE MONTH(fecha) = 07 AND YEAR(fecha) = 2021;
    
    $meses = mysqli_query($db, $sql);

    $result = array();

    if($meses && mysqli_num_rows($meses) >= 1) {
        $result = $meses;
    }

    return $result;

}