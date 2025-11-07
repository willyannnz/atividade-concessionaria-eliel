<?php
switch ($_POST["acao"]) {
    case "cadastrar":
        // 1. Pegar o nome da marca que veio do formulár
        $nome_marca = $_POST["nome_marca"];

        // 2. Montar o SQL de INSERT
        $sql = "INSERT INTO marca (nome_marca) VALUES ('{$nome_marca}')";

        // 3. Executar
        $res = $conn->query($sql);

        // 4. Verificar e redirecionar
        if ($res == true) {
            print "<script>alert('Marca cadastrada com sucesso!');</script>";
            // Redireciona para o cadastro de modelo, que é o próximo passo!
            print "<script>location.href='?page=cadastrar-modelo';</script>"; 
        } else {
            print "<script>alert('Não foi possível cadastrar a marca.');</script>";
            print "<script>location.href='?page=cadastrar-marca';</script>";
        }
        break;

    // Você também pode adicionar 'editar' e 'excluir' aqui depois
    case 'editar':
        // ...código para editar a marca...
        break;
    
    case 'excluir':
        // ...código para excluir a marca...
        break;
}
?>