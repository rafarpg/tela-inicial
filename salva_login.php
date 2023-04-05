<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADOS LOGIN</title>
</head>
<body>
    DADOS DE LOGIN:
    <br><br>
    <?php
    
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $confirmacao_senha = $_POST["confirmacao_senha"];
    echo($email)
    echo($cpf)
    echo($usuario)
    echo($senha)
    echo($confirmacao_senha)

    ?>
</body>
</html>