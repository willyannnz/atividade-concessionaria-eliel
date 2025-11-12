<h1>Editar Cliente</h1>
<?php
    $sql = "SELECT * FROM cliente WHERE id_cliente=".$_REQUEST['id_cliente'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-cliente" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_cliente" value="<?php print $row->id_cliente;?>">
    
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome_cliente" id="nome" class="form-control" value="<?php print $row->nome_cliente;?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email_cliente" id="email" class="form-control" value="<?php print $row->email_cliente;?>">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf_cliente" id="cpf" class="form-control" value="<?php print $row->cpf_cliente;?>">
    </div>
    <div class="mb-3">
        <label for="data" class="form-label">Data de Nascimento</label>
        <input type="date" name="dt_nasc_cliente" id="data" class="form-control" value="<?php print $row->dt_nasc_cliente;?>">
    </div>
    <div class="mb-3">
        <label for="fone" class="form-label">Telefone</label>
        <input type="text" name="fone_cliente" id="fone" class="form-control" value="<?php print $row->fone_cliente;?>">
    </div>
    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" name="endereco_cliente" id="endereco" class="form-control" value="<?php print $row->endereco_cliente;?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>