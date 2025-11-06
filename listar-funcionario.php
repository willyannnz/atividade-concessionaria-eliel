<div class="container mt-4">
<h1>Listar Funcionário</h1>
<?php
    $sql = "SELECT * FROM funcionario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Telefone</th>"; 
        print "<th>CPF</th>"; 
        print "</tr>";
        
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_funcionario."</td>";     
            print "<td>".$row->nome_funcionario."</td>";     
            print "<td>".$row->email_funcionario."</td>";     
            print "<td>".$row->cpf_funcionario."</td>";
            print "<td>".$row->fone_funcionario."</td>";
            print "</tr>";
        }
        
        print "</table>";
        
    } else {
        print "<p class='alert alert-danger'>Não encontrou nenhum resultado!</p>";
    }
    
    ?>
</div>