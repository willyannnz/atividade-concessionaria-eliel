<?php

$nome = $_POST['nome_modelo'];
$placa = $_POST['placa_modelo'];
$cor = $_POST['cor_modelo'];
$ano = $_POST['ano_modelo'];
$marca_id = $_POST['marca_id_marca']; 

$sql = "INSERT INTO modelo (nome_modelo, placa_modelo, cor_modelo, ano_modelo, marca_id_marca)
        VALUES ('{$nome}', '{$placa}', '{$cor}', '{$ano}', '{$marca_id}')";

?>