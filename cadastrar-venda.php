<div class="container mt-4">
<h1>Cadastro de Venda</h1>
<form action="?page=cadastrar-venda" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Data da Venda
            <input type="date" name="dt_nasc_venda" class="form-control input">
        </label>
    </div>
    <div class="mb-3">
        <label>Valor da Venda
            <input type="text" name="nome_venda" class="form-control input">
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
</form>
</div>
