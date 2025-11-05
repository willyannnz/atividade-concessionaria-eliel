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
            //code...
            break;
        case 'excluir':
            //code...
            break;
        default:
            //code...
            break;
    }
?>