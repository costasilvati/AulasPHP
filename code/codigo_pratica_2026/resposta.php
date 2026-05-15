<?php

echo("Página de resposta!!");
/* No lado do servidor, use
PHP para validar os dados recebidos. Verifique se
ambos os campos foram preenchidos e se o nome de
usuário e a senha correspondem a um conjunto pre-
definido de credenciais (mínimo 2 credenciais pré ca-
dastradas)*/

//Verifique se ambos os campos foram preenchidos
include('logica.php');
if (isset($_POST['user']) && isset($_POST['senha'])) {
    $user = $_POST['user'];
    $senha = $_POST['senha'];
    getDados($user, $senha);
} else {
        echo "Página requisitada via GET";
    }

?>