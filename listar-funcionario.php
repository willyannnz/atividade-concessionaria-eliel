<div class="container mt-4">
<h1>Listar Funcionário</h1>
<?php
    $sql = "SELECT * FROM funcionario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        // Erro 1 (;) e Erro 4 (</b>) corrigidos aqui
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        
        // Erro 1 (;) corrigido aqui
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Telefone</th>"; // Header
        print "</tr>";
        
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_funcionario."</td>";     
            print "<td>".$row->nome_funcionario."</td>";     
            print "<td>".$row->email_funcionario."</td>";     
            
            // Erro 2 (nome da coluna) corrigido aqui
            print "<td>".$row->fone_funcionario."</td>";
            
            print "</tr>";
        }
        
        // Erro 3 (tabela fechada) corrigido aqui
        print "</table>";
        
    } else {
        // Erro 5 (lógica) corrigido aqui
        print "<p class='alert alert-danger'>Não encontrou nenhum resultado!</p>";
    }
    
    ?>
</div>