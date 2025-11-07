<div class="container mt-4">
    <h1>Listagem de Modelos</h1>
    <?php
        // CORREÇÃO: Usamos INNER JOIN para buscar o NOME da marca
        $sql = "SELECT 
                    m.id_modelo, 
                    m.nome_modelo, 
                    m.placa_modelo, 
                    m.cor_modelo, 
                    m.ano_modelo, 
                    b.nome_marca  -- <-- Traz o nome da marca
                FROM 
                    modelo AS m   -- "m" é um apelido para a tabela modelo
                INNER JOIN 
                    marca AS b    -- "b" é um apelido para a tabela marca
                ON 
                    m.marca_id_marca = b.id_marca"; // <-- A condição de ligação

        $res = $conn->query($sql);
        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<thead>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome do Modelo</th>";
            print "<th>Placa</th>";
            print "<th>Cor</th>";
            print "<th>Ano</th>";
            print "<th>Marca</th>"; // <-- Coluna que estava com erro
            print "<th>Ações</th>";
            print "</tr>";
            print "</thead>";
            print "<tbody>";
            while ($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>{$row->id_modelo}</td>";
                print "<td>{$row->nome_modelo}</td>";
                print "<td>{$row->placa_modelo}</td>";
                print "<td>{$row->cor_modelo}</td>";
                print "<td>{$row->ano_modelo}</td>";
                // CORREÇÃO: Imprimir o 'nome_marca' que veio do JOIN
                print "<td>{$row->nome_marca}</td>"; 
                print "<td>
                        <button onclick=\"location.href='?page=editar-modelo&id_modelo={$row->id_modelo}';\" class='btn btn-success btn-sm'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-modelo&acao=excluir&id_modelo={$row->id_modelo}';}else{false;}\" class='btn btn-danger btn-sm'>Excluir</button>
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