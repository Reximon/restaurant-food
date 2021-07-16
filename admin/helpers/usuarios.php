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