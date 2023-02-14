<?php
    include('config.php');

    if(isset($_POST['email']) || isset($_POST['senha'])){

        if (strlen($_POST['email']) == 0){
            echo "Preencha seu email!";

        } else if (strlen($_POST['senha']) == 0) {
            echo "Preencha seu senha!";

        } else {

            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

            $res = $conn->query($sql) or die ("Falha na concexão do código SQl: " . $mysqli->error);
            
            $qtd = $res->num_rows;

            if($qtd == 1){

                $usuario = $sql_query->fetch_object();

                if (!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: index.php");
            }
            else {
                echo "Falha ao logar! E-mail ou saenha incorretor!";
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <form action="" method="POST">

        <h1>Login</h1>

        <div class="mb-3">
            <label>Email: </label>
            <input class="form-control" type="email" name="email">
        </div>

        <div class="mb-3">
            <label>Senha: </label>
            <input class="form-control" type="password" name="senha">
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Logar</button>
        </div>
     
    </form>

    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>