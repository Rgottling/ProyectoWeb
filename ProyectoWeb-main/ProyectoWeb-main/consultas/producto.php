<?php

function countProductos(PDO $conexion)
{
    $consulta = $conexion->prepare('
        SELECT COUNT(1)
        FROM productos
    ');
    $consulta->execute();
    return $consulta->fetchColumn();
}

function getProductos(PDO $conexion, $pagina_actual, $cuantos_por_pagina)
{

    $desde = ($pagina_actual - 1) * $cuantos_por_pagina;
    
    $consulta = $conexion->prepare('
        SELECT id_productos, modelo, nombre, precio
        FROM productos
        LIMIT :desde, :cuantos_por_pagina
    ');

    $consulta->bindValue(':desde', $desde, PDO::PARAM_INT);
    $consulta->bindValue(':cuantos_por_pagina', $cuantos_por_pagina, PDO::PARAM_INT);

    $consulta->execute();

    return $consulta->fetchAll();

}