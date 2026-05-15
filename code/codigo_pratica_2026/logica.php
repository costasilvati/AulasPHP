<?php
function getDados($user, $senha){
    $usuarios = ["teste", "maria"];
    $senhas = ["123", "m@123"];
    $mensagens = [
        "<p>Usuário não preenchido</p>",
        "<p>Senha não preenchida</p>",
        "<p>Usuário não encontrado</p>",
        "<p>Senha inválida </p>",
        "<p>Logado com sucesso! </p>"
    ];
    $user_valido = 0;
    $senha_valida = 0;
        if ($user != "") {
            foreach ($usuarios as $us) {
                if ($user === $us) {
                    $user_valido = 1;
                    echo "<p>Usuário $user encontrado</p>";
                }
            }
        } else {
            echo $mensagens[0];
        }
        if ($senha != "") {
            foreach ($senhas as $pass) {
                if ($senha === $pass) {
                    $senha_valida = 1;
                }
            }
        } else {
            echo $mensagens[1];
        }
        if ($senha_valida == 1 && $user_valido == 1) {
            echo $mensagens[4];
        } else {
            if ($senha_valida == 0) {
                echo $mensagens[3];
            } elseif ($user_valido == 0) {
                echo $mensagens[2];
            }
        }  
}
