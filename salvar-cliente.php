<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        // Seu código de INSERT (cadastrar) que você já tem...
        break;

    case 'editar':
        // 1. Pegar todos os dados do formulário de edição
        $id = $_POST["id_cliente"];
        $nome = $_POST["nome_cliente"];
        $email = $_POST["email_cliente"];
        $cpf = $_POST["cpf_cliente"];
        $dt_nasc = $_POST["dt_nasc_cliente"];
        $fone = $_POST["fone_cliente"];
        $endereco = $_POST["endereco_cliente"];

        // 2. Montar o SQL de UPDATE para CLIENTE
        $sql = "UPDATE cliente SET 
                    nome_cliente = '{$nome}', 
                    email_cliente = '{$email}', 
                    cpf_cliente = '{$cpf}', 
                    dt_nasc_cliente = '{$dt_nasc}',
                    fone_cliente = '{$fone}',
                    endereco_cliente = '{$endereco}'
                WHERE 
                    id_cliente = {$id}";
        
        // 3. Executar
        $res = $conn->query($sql);

        // 4. Verificar e redirecionar
        if ($res == true) {
            print "<script>alert('Cliente atualizado com sucesso!');</script>";
            print "<script>location.href='?page=listar-cliente';</script>"; // Mude para sua página de listar cliente
        } else {
            print "<script>alert('Não foi possível atualizar.');</script>";
            print "<script>location.href='?page=listar-cliente';</script>"; // Mude para sua página de listar cliente
        }
        break;
    
    case 'excluir':
        // Seu código de DELETE (excluir)
        break;
}
?>