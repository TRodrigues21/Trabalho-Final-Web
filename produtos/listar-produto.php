<h1> Listar Produtos</h1>

<?php

    $sql = "SELECT * FROM produto";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Descrição</th>";
            print "<th>Valor</th>";
            print "<th>Quantidade</th>";
            print "<th>Validade</th>";
            print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" .$row->id. "</td>";
            print "<td>" .$row->descricao. "</td>";
            print "<td>" .$row->valor. "</td>";
            print "<td>" .$row->quantidade. "</td>";
            print "<td>" .$row->validade. "</td>";
            print "<td> 
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button> 
                
                <button onclick=\"if(confirm('Tem certeza eu deseja excluir ?')){
                    location.href='?page=salvar&acao=excluir&id=".$row->id."';
                } else {
                    false;
                }
                \" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";

    } else {
        print "<p class='alert alert-danger'> Não encontrou produtos!</p>";
    }
?>