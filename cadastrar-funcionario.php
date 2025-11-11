<h1>Cadastrar Funcionário</h1>
<form action="?page=salvar-funcionario" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome_funcionario" id="nome" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email_funcionario" id="email" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf_funcionario" id="cpf" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="fone" class="form-label">Telefone</label>
        <input type="text" name="fone_funcionario" id="fone" class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>