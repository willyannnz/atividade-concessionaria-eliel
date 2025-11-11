<div class="container mt-4">
<h1>Editar Venda</h1>
<?php
    // 1. Busca os dados da venda atual
    $sql = "SELECT * FROM venda WHERE id_venda = " . $_REQUEST['id_venda'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_venda" value="<?php print $row->id_venda; ?>">

    <div class="mb-3">
        <label>Data da Venda</label>
        <input type="date" name="data_venda" class="form-control" value="<?php print $row->data_venda; ?>">
    </div>
    <div class="mb-3">
        <label>Valor da Venda</label>
        <input type="text" name="valor_venda" class="form-control" value="<?php print $row->valor_venda; ?>">
    </div>

    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_id_cliente" class="form-select">
            <option>-- Selecione --</option>
            <?php
                $sql_cli = "SELECT * FROM cliente";
                $res_cli = $conn->query($sql_cli);
                while ($row_cli = $res_cli->fetch_object()) {
                    // Verifica se este é o cliente salvo na venda e marca como 'selected'
                    $selected = ($row_cli->id_cliente == $row->cliente_id_cliente) ? "selected" : "";
                    print "<option value='{$row_cli->id_cliente}' {$selected}>{$row_cli->nome_cliente}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Modelo</label>
        <select name="modelo_id_modelo" class="form-select">
            <option>-- Selecione --</option>
            <?php
                $sql_mod = "SELECT * FROM modelo";
                $res_mod = $conn->query($sql_mod);
                while ($row_mod = $res_mod->fetch_object()) {
                    $selected = ($row_mod->id_modelo == $row->modelo_id_modelo) ? "selected" : "";
                    print "<option value='{$row_mod->id_modelo}' {$selected}>{$row_mod->nome_modelo}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Vendedor</label>
        <select name="funcionario_id_funcionario" class="form-select">
            <option>-- Selecione --</option>
            <?php
                $sql_func = "SELECT * FROM funcionario";
                $res_func = $conn->query($sql_func);
                while ($row_func = $res_func->fetch_object()) {
                    $selected = ($row_func->id_funcionario == $row->funcionario_id_funcionario) ? "selected" : "";
                    print "<option value='{$row_func->id_funcionario}' {$selected}>{$row_func->nome_funcionario}</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>
</div>