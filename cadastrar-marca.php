<div class="container mt-4">
    <h1>Cadastro da Marca</h1>
    <form action="?page=salvar-marca" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome da Marca</label>
            <input type="text" name="nome_marca" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>