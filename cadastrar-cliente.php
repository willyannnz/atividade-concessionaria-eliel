<div class="container mt-4">
<h1>Cadastro Cliente</h1>
<form action="?page=cadastrar-cliente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome 
            <input type="text" name="nome_cliente" class="form-control input">
        </label>
    </div>
    <div class="mb-3">
        <label>Email
            <input type="email" name="email_cliente" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>CPF
            <input type="text" name="cpf_cliente" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento
            <input type="date" name="dt_nasc_cliente" class="form-control input">
        </label>
    </div>
    <div class="mb-3">
        <label>Telefone
            <input type="text" name="fone_cliente" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Endereço
            <input type="text" name="endereco_cliente" class="form-control">
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
</form>
</div>
