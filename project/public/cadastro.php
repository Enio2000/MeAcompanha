<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tupiniquim - Cadastro</title>
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
                <a class="navbar-brand" href="/">TUPINIQUIM</a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4 gap-3">
                        <li class="nav-item"><a class="nav-link" href="produtos.html">Produtos</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Cadastro</a></li>
                        <li class="nav-item"><a class="nav-link" href="pagamento.html">Pagamento</a></li>
                        <li class="nav-item"><a class="nav-link" href="sac.html">SAC</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-oferta py-4">
            <div class="container px-4 px-lg-5 my-5">
                
            </div>
        </header>
        <!-- Section-->
        <section class="py-5 row">
            <div class="col-4 container px-4 px-lg-5 mt-5 justify-content-center">
                <h2 class="h5">Já é cadastrado?</h2>
                <p class="h4 mt-3">Faça seu login:</p>
                <form class="mt-4">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Senha</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <a href="pagamento.html" type="submit" class="btn btn-primary">Entrar</a>
                  </form>
            </div>


            <div class="col-6 container px-4 px-lg-5 mt-5 justify-content-center">
                <h2 class="h5">Não é cadastrado ainda?</h2>
                <h2 class="h4 mt-3" href="?page=novo">Quero me cadastrar:</h2>
                
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li>
                </ul>
                <!-- Novo usuário via PHP -->


                <div class="container">
                    <div class="row">
                        <div class="col mt-5">
                        <?php
                            include("config.php");
                            switch(@$_REQUEST["page"]){
                            case "novo":
                                include("novo-usuario.php");
                            break;
                            case "listar":
                                include("listar-usuario.php");
                            break;
                            case "salvar":
                                include("salvar-usuario.php");
                            break;
                            case "editar":
                                include("editar-usuario.php");
                            break;
                            default:
                                print "<h1>Bem Vindos!</h1>";
                            }
                        ?>
                        </div>
                    </div>
                </div>


            </div>            
        </section>
        <!-- Footer-->
        <footer class="text-center text-lg-start bg-black text-muted">
            <div class="container text-center text-md-start mt-5 pt-3">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="bi bi-shop me-3"></i>TUPINIQUIM
                        </h6>
                        <p>
                            Onde é muito bom comprar!
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Serviços</h6>
                        <p><a href="produtos.html" class="text-reset text-decoration-none">Produtos</a></p>
                        <p><a href="#" class="text-reset text-decoration-none">Cadastro</a></p>
                        <p><a href="pagamento.html" class="text-reset text-decoration-none">Pagamento</a></p>
                        <p><a href="sac.html" class="text-reset text-decoration-none">SAC</a></p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contatos</h6>
                        <p><i class="bi bi-envelope-fill me-3"></i>sac@tupiniquim.com.br</p>
                        <p><i class="bi bi-telephone-fill me-3"></i>+55 11 99999-9999</p>
                        <p><i class="bi bi-house-door-fill me-3"></i>Rua Tupiniquim, s/n</p>
                        <p><i class="bi bi-house-door-fill me-3"></i>Louveira/SP</p>
                    </div>
                </div>
            </div>
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                Supermercado Tupiniquim © 2023 - Alguns direitos reservados.
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
