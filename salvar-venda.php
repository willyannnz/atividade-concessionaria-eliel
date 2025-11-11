<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $data = $_POST["data_venda"];
        $valor = $_POST["valor_venda"];
        $cliente = $_POST["cliente_id_cliente"];
        $modelo = $_POST["modelo_id_modelo"];
        $func = $_POST["funcionario_id_funcionario"];

        $sql = "INSERT INTO venda (data_venda, valor_venda, cliente_id_cliente, modelo_id_modelo, funcionario_id_funcionario) 
                VALUES ('{$data}', '{$valor}', '{$cliente}', '{$modelo}', '{$func}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Venda cadastrada com sucesso!');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar a venda.');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        }
        break;

    case 'editar':
        $id = $_POST["id_venda"];
        $data = $_POST["data_venda"];
        $valor = $_POST["valor_venda"];
        $cliente = $_POST["cliente_id_cliente"];
        $modelo = $_POST["modelo_id_modelo"];
        $func = $_POST["funcionario_id_funcionario"];

        $sql = "UPDATE venda SET 
                    data_venda='{$data}', 
                    valor_venda='{$valor}', 
                    cliente_id_cliente='{$cliente}', 
                    modelo_id_modelo='{$modelo}', 
                    funcionario_id_funcionario='{$func}' 
                WHERE id_venda={$id}";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Venda editada com sucesso!');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        } else {
            print "<script>alert('Não foi possível editar a venda.');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM venda WHERE id_venda=" . $_REQUEST["id_venda"];
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Venda excluída com sucesso!');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        } else {
            print "<script>alert('Não foi possível excluir a venda.');</script>";
            print "<script>location.href='?page=listar-venda';</script>";
        }
        break;
}
?>