<div class="container mt-4">
    <h1>Resultado da Pesquisa</h1>
    <?php
        $busca = $_POST["query_busca"];

        $sql = "SELECT 
                    m.id_modelo, 
                    m.nome_modelo, 
                    m.placa_modelo, 
                    m.cor_modelo, 
                    m.ano_modelo, 
                    b.nome_marca
                FROM 
                    modelo AS m
                INNER JOIN 
                    marca AS b
                ON 
                    m.marca_id_marca = b.id_marca
                WHERE 
                    m.nome_modelo LIKE '%{$busca}%'"; 

        $res = $conn->query($sql);
        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<p>Encontrou <b>$qtd</b> resultado(s) para '<i>$busca</i>'.</p>";
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<thead>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Modelo</th>";
            print "<th>Marca</th>";
            print "<th>Placa</th>";
            print "<th>Cor</th>";
            print "<th>Ano</th>";
            print "</tr>";
            print "</thead>";
            print "<tbody>";
            
            while ($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>{$row->id_modelo}</td>";
                print "<td>{$row->nome_modelo}</td>";
                print "<td>{$row->nome_marca}</td>";
                print "<td>{$row->placa_modelo}</td>";
                print "<td>{$row->cor_modelo}</td>";
                print "<td>{$row->ano_modelo}</td>";
                print "</tr>";
            }
            print "</tbody>";
            print "</table>";
            
            // Botão para voltar
            print "<button onclick=\"location.href='?page=listar-modelo';\" class='btn btn-primary'>Voltar para Lista Completa</button>";
            
        } else {
            print "<div class='alert alert-warning'>Não foram encontrados resultados para: <strong>$busca</strong></div>";
            print "<button onclick=\"location.href='index.php';\" class='btn btn-secondary'>Voltar</button>";
        }
    ?>
</div>