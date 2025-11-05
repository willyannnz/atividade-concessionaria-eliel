<h1>Cadastrar Funcionário</h1>
<form action="?page=salvar-funcionario" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome-funcionario" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Email
            <input type="email" name="email-funcionario" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>CPF
            <input type="text" name="cpf-funcionario" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Telefone
            <input type="text" name="fone-funcionario" class="form-control">
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>