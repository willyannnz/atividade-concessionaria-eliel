<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_id_cliente" class="form-select">
            <option> Selecione o Cliente </option>
            <?php
                $sql = "SELECT id_cliente, nome_cliente FROM cliente";
                $res = $conn->query($sql);
                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_object()) {
                        print "<option value='{$row->id_cliente}'>{$row->nome_cliente}</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Modelo do Carro</label>
        <select name="modelo_id_modelo" class="form-select">
            <option> Selecione o Modelo </option>
            <?php
                $sql = "SELECT id_modelo, nome_modelo FROM modelo";
                $res = $conn->query($sql);
                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_object()) {
                        print "<option value='{$row->id_modelo}'>{$row->nome_modelo}</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Funcionário (Vendedor)</label>
        <select name="funcionario_id_funcionario" class="form-select">
            <option>Selecione o Vendedor</option>
            <?php
                $sql = "SELECT id_funcionario, nome_funcionario FROM funcionario";
                $res = $conn->query($sql);
                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_object()) {
                        print "<option value='{$row->id_funcionario}'>{$row->nome_funcionario}</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
</form>
</div>
