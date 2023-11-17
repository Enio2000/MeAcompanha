<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MeAcompanha</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/meucss.css">
  </head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-2 box-shadow">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/">MeAcompanha</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4 gap-3">
                    <li class="nav-item"><a class="nav-link" href="listar-usuario.php">Usuário</a></li>
                    <li class="nav-item"><a class="nav-link" href="cardapios.php">Cardápios</a></li>                        
                    <li class="nav-item"><a class="nav-link" href="cadastro.php">Cadastro</a></li>
                    <li class="nav-item"><a class="nav-link" href="pagamento.html">Histórico</a></li>
                    <li class="nav-item"><a class="nav-link" href="sac.html">SAC</a></li>
                </ul>
            </div>
        </div>
    </nav>
<body>


<h1>Cardápio do Usuário</h1>


<?php
    include("config.php");
    
    $sql = "SELECT * FROM db_cardapios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd >0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>ID do Usuario</th>";
        print "<th>Data</th>";
        print "<th>Café da Manha</th>";
        print "<th>Lanche da Manha</th>";
        print "<th>Almoço</th>";
        print "<th>Lanche da Tarde</th>";
        print "<th>Jantar</th>";
        print "<th>Ceia</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->menu_id."</td>";
            print "<td>".$row->user_id."</td>";
            print "<td>".$row->data."</td>";
            print "<td>".$row->cafe_da_manha."</td>";
            print "<td>".$row->lanche_da_manha."</td>";
            print "<td>".$row->almoco."</td>";
            print "<td>".$row->lanche_da_tarde."</td>";
            print "<td>".$row->jantar."</td>";
            print "<td>".$row->ceia."</td>";
/*             print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>                       
            </td>;"; */
            print "</tr>";
        }
        print "</table>";
    }else{
        print"<p class='alert alert-danger'>Não encontrei resultado</p>";
    }
?>