<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
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


<h1>Dados do Usuário</h1>

<?php
    include("config.php");
    
    $sql = "SELECT * FROM db_users";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd >0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Gênero</th>";
        print "<th>Meta de Calorias</th>";
        print "<th>Instagram</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->name."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->birth_date."</td>";
            print "<td>".$row->gender."</td>";
            print "<td>".$row->calories_target."</td>";
            print "<td>".$row->instagram."</td>";
            print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>                       
                    </td>;";
            print "</tr>";
        }
        print "</table>";
    }else{
        print"<p class='alert alert-danger'>Não encontrei resultado</p>";
    }

        
    $sql = "SELECT * FROM db_user_preferences";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd >0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>user_id</th>";
        print "<th>food_name</th>";
        print "<th>group</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->prefer_id."</td>";
            print "<td>".$row->user_id."</td>";
            print "<td>".$row->food_name."</td>";
            print "<td>".$row->group."</td>";
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

