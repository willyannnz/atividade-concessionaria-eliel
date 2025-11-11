<div class="container mt-4">
<h1>Cadastro Modelo</h1>
<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Modelo</label>
        <input type="text" name="nome_modelo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Placa</label>
        <input type="text" name="placa_modelo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cor</label>
        <input type="text" name="cor_modelo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Ano</label>
        <input type="text" name="ano_modelo" class="form-control">
    </div>
    
    <div class="mb-3">
        <label>Marca</label>
        <select name="marca_id_marca" class="form-select">
            <option>Selecione uma Marca</option>
            <?php
                // Busca todas as marcas no banco
                $sql_marcas = "SELECT * FROM marca";
                $res_marcas = $conn->query($sql_marcas);
                
                if ($res_marcas->num_rows > 0) {
                    while ($row_marca = $res_marcas->fetch_object()) {
                        print "<option value='{$row_marca->id_marca}'>{$row_marca->nome_marca}</option>";
                    }
                } else {
                    print "<option disabled>Cadastre uma marca primeiro</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div>