<?php

    include('config.php');

    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome_funcionario'];
            $email = $_POST['email_funcionario'];
            $cpf = $_POST['cpf_funcionario'];
            $fone = $_POST['fone_funcionario'];
    

            $sql = "INSERT INTO funcionario (
                        nome_funcionario, 
                        cpf_funcionario, 
                        email_funcionario,
                        fone_funcionario)
                        VALUES ('{$nome}', '{$cpf}', '{$email}', '{$fone}')";
                
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='?page=listar-funcionario';</script>";
            }else{
                print "<script>alert('Não cadastrou!');</script>";
                print "<script>location.href='?page=listar-funcionario';</script>";

            }
            break;

       case 'editar':
            $id = $_POST["id_funcionario"];
            $nome = $_POST["nome_funcionario"];
            $email = $_POST["email_funcionario"];
            $cpf = $_POST["cpf_funcionario"];
            $fone = $_POST["fone_funcionario"];

            $sql = "UPDATE funcionario SET 
                        nome_funcionario = '{$nome}', 
                        email_funcionario = '{$email}', 
                        cpf_funcionario = '{$cpf}', 
                        fone_funcionario = '{$fone}'
                    WHERE 
                        id_funcionario = {$id}";
            
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Funcionário atualizado com sucesso!');</script>";
                print "<script>location.href='?page=listar-funcionario';</script>";
            } else {
                print "<script>alert('Não foi possível atualizar.');</script>";
                print "<script>location.href='?page=listar-funcionario';</script>";
            }
            break;

        case 'excluir':
            
            $sql = "DELETE FROM funcionario WHERE id_funcionario = ".$_REQUEST['id_funcionario'];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Funcionário excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-funcionario';</script>";
            } else {
                print "<script>alert('Não foi possível excluir.');</script>";
                print "<script>location.href='?page=listar-funcionario';</script>";
            }
            break;
    }
?>