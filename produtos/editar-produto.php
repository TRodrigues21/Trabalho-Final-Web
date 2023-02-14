<h1> Editar Produto</h1>

<?php
    $sql = "SELECT * FROM produto WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">

    <input type="hidden" name="acao" value="editar"> 
    <input type="hidden" name="id" value="<?php print $row->id; ?>"> 

    <div class="mb-3">
        <label>Descrição: </label>
        <input type="text" name="descricao" class="form-control" value="<?php print $row->descricao; ?>">
    </div>

    <div class="mb-3">
        <label>Valor: </label>
        <input type="number" name="valor" class="form-control" value="<?php print $row->valor; ?>">
    </div>

    <div class="mb-3">
        <label>Quantidade: </label>
        <input type="number" name="quantidade" class="form-control" value="<?php print $row->quantidade; ?>">
    </div>

    <div class="mb-3">
        <label>Validade: </label>
        <input type="date" name="validade" class="form-control" value="<?php print $row->validade; ?>">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>