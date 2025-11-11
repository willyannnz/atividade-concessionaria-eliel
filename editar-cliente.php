<link rel="stylesheet" href="css/estilo.css">
<div class="container mt-4">
<h1>Editar Cliente</h1>
<?php
    // 1. Busca os dados do CLIENTE específico
    $sql = "SELECT * FROM cliente
            WHERE id_cliente=".$_REQUEST['id_cliente'];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-cliente" method="POST">
    <input type="hidden" name="acao" value="editar">
    
    <input type="hidden" name="id_cliente" value="<?php print $row->id_cliente;?>">
    
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_cliente" class="form-control" value="<?php print $row->nome_cliente;?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Email
            <input type="email" name="email_cliente" class="form-control" value="<?php print $row->email_cliente;?>">
        </label>
    </div>
    <div class="mb-3">
        <label>CPF
            <input type="text" name="cpf_cliente" class="form-control" value="<?php print $row->cpf_cliente;?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento
            <input type="date" name="dt_nasc_cliente" class="form-control" value="<?php print $row->dt_nasc_cliente;?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Telefone
            <input type="text" name="fone_cliente" class="form-control" value="<?php print $row->fone_cliente;?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Endereço
            <input type="text" name="endereco_cliente" class="form-control" value="<?php print $row->endereco_cliente;?>">
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>
</div>