<?php

require "../../app/src/Alimentos.php";

$alimentos = Alimentos::getInstance();
$data = [];

if(empty($_GET)) {
    
    $data = $alimentos->getAlimentos();
}

if(isset($_GET['alimento']))
{
    $data = $alimentos->getAlimentosContendo($_GET['alimento']);
}

if(isset($_GET['id']))
{
    $id = intval($_GET['id']);
    $data = $alimentos->getAlimentoPorID($id);
}

ob_start();
header('Content-Type: application/json');

echo json_encode($data);

ob_end_flush();