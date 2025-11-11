<h1>Cadastro Cliente</h1>
<form action="?page=salvar-cliente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome_cliente" id="nome" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email_cliente" id="email" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf_cliente" id="cpf" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="data" class="form-label">Data de Nascimento</label>
        <input type="date" name="dt_nasc_cliente" id="data" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="fone" class="form-label">Telefone</label>
        <input type="text" name="fone_cliente" id="fone" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" name="endereco_cliente" id="endereco" class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>