<?php
// ... logo após o carrossel ...

// Consultas para contar os registros
$qtd_carros = $conn->query("SELECT count(*) as total FROM modelo")->fetch_object()->total;
$qtd_vendas = $conn->query("SELECT count(*) as total FROM venda")->fetch_object()->total;
$qtd_clientes = $conn->query("SELECT count(*) as total FROM cliente")->fetch_object()->total;

print '
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card text-bg-primary mb-3">
            <div class="card-header"><i class="fa-solid fa-car"></i> Veículos</div>
            <div class="card-body">
                <h1 class="card-title display-4">'.$qtd_carros.'</h1>
                <p class="card-text">Modelos cadastrados no estoque.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-success mb-3">
            <div class="card-header"><i class="fa-solid fa-cash-register"></i> Vendas</div>
            <div class="card-body">
                <h1 class="card-title display-4">'.$qtd_vendas.'</h1>
                <p class="card-text">Vendas realizadas até hoje.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-info mb-3 text-white">
            <div class="card-header"><i class="fa-solid fa-users"></i> Clientes</div>
            <div class="card-body">
                <h1 class="card-title display-4">'.$qtd_clientes.'</h1>
                <p class="card-text">Clientes ativos na base.</p>
            </div>
        </div>
    </div>
</div>';
?>