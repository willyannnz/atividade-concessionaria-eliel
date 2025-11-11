<?php
// Certifique-se que o include('config.php'); está no seu index.php ou aqui
// include('config.php'); 

switch ($_REQUEST["acao"]) {
    case "cadastrar":
        // Pega os dados do 'cadastrar-modelo.php'
        $nome = $_POST['nome_modelo'];
        $placa = $_POST['placa_modelo'];
        $cor = $_POST['cor_modelo'];
        $ano = $_POST['ano_modelo'];
        $marca_id = $_POST['marca_id_marca']; 

        $sql = "INSERT INTO modelo (nome_modelo, placa_modelo, cor_modelo, ano_modelo, marca_id_marca)
                VALUES ('{$nome}', '{$placa}', '{$cor}', '{$ano}', '{$marca_id}')";
        
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Modelo cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar.');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        }
        break;

    case "editar":
        // Pega os dados do 'editar-modelo.php'
        $id = $_POST['id_modelo'];
        $nome = $_POST['nome_modelo'];
        $placa = $_POST['placa_modelo'];
        $cor = $_POST['cor_modelo'];
        $ano = $_POST['ano_modelo'];
        $marca_id = $_POST['marca_id_marca'];

        $sql = "UPDATE modelo SET
                    nome_modelo = '{$nome}',
                    placa_modelo = '{$placa}',
                    cor_modelo = '{$cor}',
                    ano_modelo = '{$ano}',
                    marca_id_marca = '{$marca_id}'
                WHERE
                    id_modelo = {$id}";
        
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Modelo editado com sucesso!');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        } else {
            print "<script>alert('Não foi possível editar.');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        }
        break;

    case "excluir":
        // Pega o ID do 'listar-modelo.php'
        $id = $_REQUEST['id_modelo'];
        
        $sql = "DELETE FROM modelo WHERE id_modelo = {$id}";
        
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Modelo excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        } else {
            print "<script>alert('Não foi possível excluir.');</script>";
            print "<script>location.href='?page=listar-modelo';</script>";
        }
        break;
}
?>