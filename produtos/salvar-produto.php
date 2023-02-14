<?php

    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $descricao = $_POST["descricao"];
            $valor = $_POST["valor"];
            $quantidade = $_POST["quantidade"];
            $validade = $_POST["validade"];

            $sql = "INSERT INTO produto (descricao, valor, quantidade, validade) VALUES ('{$descricao}', '{$valor}', '{$quantidade}', '{$validade}')";

            $res = $conn->query($sql); 

            if ($res == true) {
                print "<script> alert ('Cadastrado com sucesso!')</script>";
                print "<script> location.href='?page=listar'</script>";
            } else {
                print "<script> alert ('Não foi possivel cadastrar!')</script>";
                print "<script> location.href='?page=listar'</script>";
            }

        break;

        case 'editar':
            $descricao = $_POST["descricao"];
            $valor = $_POST["valor"];
            $quantidade = $_POST["quantidade"];
            $validade = $_POST["validade"];

            $sql = "UPDATE produto SET descricao='{$descricao}', valor='{$valor}', quantidade='{$quantidade}', validade='{$validade}' WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql); 

            if ($res == true) {
                print "<script> alert ('Editado com sucesso!')</script>";
                print "<script> location.href='?page=listar'</script>";
            } else {
                print "<script> alert ('Não foi possivel editar!')</script>";
                print "<script> location.href='?page=listar'</script>";
            }
        break;

        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql); 

            if ($res == true) {
                print "<script> alert ('Excluido com sucesso!')</script>";
                print "<script> location.href='?page=listar'</script>";
            } else {
                print "<script> alert ('Não foi possivel exluir!')</script>";
                print "<script> location.href='?page=listar'</script>";
            }
        break;
    }

?>