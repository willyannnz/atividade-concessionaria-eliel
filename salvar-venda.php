<?php
$data = $_POST['data_venda'];
$valor = $_POST['valor_venda'];
$cliente_id = $_POST['cliente_id_cliente']; 
$modelo_id = $_POST['modelo_id_modelo'];   
$func_id = $_POST['funcionario_id_funcionario']; 

$sql = "INSERT INTO venda (data_venda, valor_venda, cliente_id_cliente, modelo_id_modelo, funcionario_id_funcionario)
        VALUES ('{$data}', '{$valor}', '{$cliente_id}', '{$modelo_id}', '{$func_id}')";
?>