<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo com PHP</title>
</head>
<body>

    <div class="titulo">
        <h1>Bem-vindo com PHP</h1>
    </div>

    <div class="formulario">
        <?php
        
        if(isset($_GET['name']) && isset($_GET['email'])){
            $nome = $_GET['name'];
            $email = $_GET['email'];
            echo("Bem-vindo ".$name."<br>");
            echo("Seu e-mail é: ".$email);
        }else{
            echo("Dados não enviados!");
        }
        ?>
        
    </div>

</body>
</html>