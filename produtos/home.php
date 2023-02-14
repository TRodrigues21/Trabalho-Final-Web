<h1> Produtos</h1>

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
                <button class='btn btn-success'>Entrada</button> 
                
                <button class='btn btn-danger'>Saída</button>
            </td>";
            print "</tr>";
        }
        print "</table>";

    } else {
        print "<p class='alert alert-danger'> Não encontrou produtos!</p>";
    }
?>