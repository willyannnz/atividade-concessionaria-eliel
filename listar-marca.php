<div class="container mt-4">
    <h1>Listagem de Marcas</h1>
    <?php
        $sql = "SELECT * FROM marca";

        $res = $conn->query($sql);
        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<thead>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome da Marca</th>";
            print "<th>Ações</th>";
            print "</tr>";
            print "</thead>";
            print "<tbody>";
            
            // 3. Loop para exibir cada marca
            while ($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>{$row->id_marca}</td>";
                print "<td>{$row->nome_marca}</td>";
                
                // 4. Botões de Ação (Editar e Excluir)
                print "<td>
                        <button onclick=\"location.href='?page=editar-marca&id_marca={$row->id_marca}';\" class='btn btn-success btn-sm'>Editar</button>
                        
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir? Ao excluir a marca, TODOS os modelos desta marca também serão excluídos!')){location.href='?page=salvar-marca&acao=excluir&id_marca={$row->id_marca}';}else{false;}\" class='btn btn-danger btn-sm'>Excluir</button>
                       </td>";
                print "</tr>";
            }
            print "</tbody>";
            print "</table>";
        } else {
            print "<p class='alert alert-danger'>Não encontrou resultados.</p>";
        }
    ?>
</div>