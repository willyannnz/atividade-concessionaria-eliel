<div class="container mt-4">
<h1>Editar Modelo</h1>
<?php
    // Busca os dados do modelo específico que queremos editar
    $sql = "SELECT * FROM modelo WHERE id_modelo = ".$_REQUEST['id_modelo'];
    $res = $conn->query($sql);
    $row = $res->fetch_object(); // $row tem os dados atuais do modelo
?>
<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_modelo" value="<?php print $row->id_modelo; ?>">
    
    <div class="mb-3">
        <label>Nome do Modelo</label>
        <input type="text" name="nome_modelo" class="form-control" value="<?php print $row->nome_modelo; ?>">
    </div>
    <div class="mb-3">
        <label>Placa</label>
        <input type="text" name="placa_modelo" class="form-control" value="<?php print $row->placa_modelo; ?>">
    </div>
    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor_modelo" class="form-control" value="<?php print $row->cor_modelo; ?>">
    </div>
    <div class="mb-3">
        <label>Ano</label>
        <input type="text" name="ano_modelo" class="form-control" value="<?php print $row->ano_modelo; ?>">
    </div>
    
    <div class="mb-3">
        <label>Marca</label>
        <select name="marca_id_marca" class="form-select">
            <option>-- Selecione uma Marca --</option>
            <?php
                
                $sql_marcas = "SELECT * FROM marca";
                $res_marcas = $conn->query($sql_marcas);
                
                if ($res_marcas->num_rows > 0) {
                    while ($row_marca = $res_marcas->fetch_object()) {
                       
                        if ($row_marca->id_marca == $row->marca_id_marca) {
                          
                            print "<option value='{$row_marca->id_marca}' selected>{$row_marca->nome_marca}</option>";
                        } else {
                            print "<option value='{$row_marca->id_marca}'>{$row_marca->nome_marca}</option>";
                        }
                    }
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>
</div>