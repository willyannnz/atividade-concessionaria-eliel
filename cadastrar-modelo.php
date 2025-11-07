<div class="container mt-4">
<h1>Cadastro Modelo</h1>
<form action="?page=cadastrar-modelo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Modelo
            <input type="text" name="nome_modelo" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Placa
            <input type="email" name="email_modelo" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Cor
            <input type="text" name="cpf_modelo" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Ano
            <input type="text" name="dt_nasc_modelo" class="form-control">
        </label>
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
                }
            ?>
        </select>
        <p></p>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
</form>
</div>
