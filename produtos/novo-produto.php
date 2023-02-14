<h1> Cadastrar Produto</h1>

<form action="?page=salvar" method="POST">

    <input type="hidden" name="acao" value="cadastrar"> 

    <div class="mb-3">
        <label>Descrição: </label>
        <input type="text" name="descricao" class="form-control" autocomplete="off">
    </div>

    <div class="mb-3">
        <label>Valor Unitário: </label>
        <input type="number" name="valor" class="form-control" autocomplete="off">
    </div>

    <div class="mb-3">
        <label>Quantidade: </label>
        <input type="number" name="quantidade" class="form-control" autocomplete="off">
    </div>

    <div class="mb-3">
        <label>Validade: </label>
        <input type="date" name="validade" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>