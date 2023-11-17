<form class="row g-3" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="col">
        <label for="nomeCompleto" class="form-label">Nome Completo</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome completo." aria-label="Nome completo">
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Senha</label>
        <input type="password" name="senha" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Digite o nome da rua, número e bairro.">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" name="cidade" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">Estado</label>
        <select id="inputState" name="estado" class="form-select">
        <option selected>Selecione</option>
        <option value="1">SP</option>
        <option value="2">RJ</option>
        <option value="3">MG</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="inputZip" class="form-label">CEP</label>
        <input type="text" name="cep" class="form-control" placeholder="somente números" id="inputZip">
    </div>
    <div class="col-12">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Concordo com os <a href="#">Termos e Condições.</a>
        </label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>