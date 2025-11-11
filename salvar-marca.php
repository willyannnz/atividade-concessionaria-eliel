<?php
switch ($_POST["acao"]) {
    case "cadastrar":
        // 1. Pegar o nome da marca que veio do formulário
        $nome_marca = $_POST["nome_marca"];

        // 2. Montar o SQL de INSERT
        $sql = "INSERT INTO marca (nome_marca) VALUES ('{$nome_marca}')";

        // 3. Executar
        $res = $conn->query($sql);

        // 4. Verificar e redirecionar
        if ($res == true) {
            print "<script>alert('Marca cadastrada com sucesso!');</script>";
            print "<script>location.href='?page=cadastrar-modelo';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar a marca.');</script>";
            print "<script>location.href='?page=cadastrar-marca';</script>";
        }
        break;

    case "editar":
        $id = $_POST["id_marca"];
        $nome = $_POST["nome_marca"];

        $sql = "UPDATE marca SET 
                    nome_marca = '{$nome}'
                WHERE 
                    id_marca = {$id}";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Marca atualizada com sucesso!');</script>";
            print "<script>location.href='?page=listar-marca';</script>";
        } else {
            print "<script>alert('Não foi possível atualizar a marca.');</script>";
            print "<script>location.href='?page=listar-marca';</script>";
        }
        break;

    case "excluir":
        $id = $_POST["id_marca"];

        $sql = "DELETE FROM marca WHERE id_marca = {$id}";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Marca excluída com sucesso!');</script>";
            print "<script>location.href='?page=listar-marca';</script>";
        } else {
            print "<script>alert('Não foi possível excluir a marca.');</script>";
            print "<script>location.href='?page=listar-marca';</script>";
        }
        break;
}
?>
