<h1>Editar Funcionário</h1>
<?php
    $sql = "SELECT * FROM funcionario WHERE id_funcionario=".$_REQUEST['id_funcionario'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-funcionario" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_funcionario" value="<?php print $row->id_funcionario;?>">

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome_funcionario" id="nome" class="form-control" value="<?php print $row->nome_funcionario;?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email_funcionario" id="email" class="form-control" value="<?php print $row->email_funcionario;?>">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf_funcionario" id="cpf" class="form-control" value="<?php print $row->cpf_funcionario;?>">
    </div>
    <div class="mb-3">
        <label for="fone" class="form-label">Telefone</label>
        <input type="text" name="fone_funcionario" id="fone" class="form-control" value="<?php print $row->fone_funcionario;?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>