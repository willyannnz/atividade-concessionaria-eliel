<div class="container mt-4">
    <h1>Listagem de Vendas</h1>
    <?php
        // Seleciona a venda e busca os NOMES nas outras tabelas
        $sql = "SELECT 
                    v.id_venda, 
                    v.data_venda, 
                    v.valor_venda, 
                    c.nome_cliente, 
                    m.nome_modelo, 
                    f.nome_funcionario
                FROM 
                    venda AS v
                INNER JOIN cliente AS c ON v.cliente_id_cliente = c.id_cliente
                INNER JOIN modelo AS m ON v.modelo_id_modelo = m.id_modelo
                INNER JOIN funcionario AS f ON v.funcionario_id_funcionario = f.id_funcionario";

        $res = $conn->query($sql);
        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<thead>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Data</th>";
            print "<th>Valor</th>";
            print "<th>Cliente</th>";
            print "<th>Modelo</th>";
            print "<th>Vendedor</th>";
            print "<th>Ações</th>";
            print "</tr>";
            print "</thead>";
            print "<tbody>";
            while ($row = $res->fetch_object()) {
                // Formatar a data para o padrão brasileiro (dia/mês/ano)
                $data_formatada = date('d/m/Y', strtotime($row->data_venda));
                
                print "<tr>";
                print "<td>{$row->id_venda}</td>";
                print "<td>{$data_formatada}</td>";
                print "<td>R$ {$row->valor_venda}</td>";
                print "<td>{$row->nome_cliente}</td>";
                print "<td>{$row->nome_modelo}</td>";
                print "<td>{$row->nome_funcionario}</td>";
                print "<td>
                        <button onclick=\"location.href='?page=editar-venda&id_venda={$row->id_venda}';\" class='btn btn-success btn-sm'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir esta venda?')){location.href='?page=salvar-venda&acao=excluir&id_venda={$row->id_venda}';}else{false;}\" class='btn btn-danger btn-sm'>Excluir</button>
                       </td>";
                print "</tr>";
            }
            print "</tbody>";
            print "</table>";
        } else {
            print "<p class='alert alert-danger'>Nenhuma venda encontrada.</p>";
        }
    ?>
</div>