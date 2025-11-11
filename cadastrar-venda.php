
<h1>Cadastro de Venda</h1>
<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Data da Venda</label>
        <input type="date" name="data_venda" class="form-control">
    </div>
    <div class="mb-3">
        <label>Valor da Venda</label>
        <input type="text" name="valor_venda" class="form-control">
    </div>

    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_id_cliente" class="form-select">
            </select>
    </div>

    <div class="mb-3">
        <label>Modelo do Carro</label>
        <select name="modelo_id_modelo" class="form-select">
            </select>
    </div>

    <div class="mb-3">
        <label>Funcionário (Vendedor)</label>
        <select name="funcionario_id_funcionario" class="form-select">
            </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>