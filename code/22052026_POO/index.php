<?php
// Sempre importar arquivos das classes utilizadas
require_once('Cliente.php'); 
$cliente = new Cliente("José Ribeiro", "maria@email.com", "12345678");

$cliente->telefone = "4399999999"; // Edita atributo
echo "Exibindo nome do objeto cliente {$cliente->nome}";
echo "<p>Chamada do método apresentar: {$cliente->apresentar()}</p>";

unset($cliente); // Chamando o destrutor
// Testando método da classe Produto
require_once('Produto.php'); // importando a classe
$prod = new Produto();
$prod->nome = "Seda - pacote";
$prod->preco = 3.5;

echo "<p> {$prod->exibirResumo()} </p>";
echo "<p>Desconto: {$prod->calcularDesconto(10)}</p>";

require_once('Usuario.php');

$usuario = new Usuario("12345678");
$usuario->definirSenha("12345678");

if($usuario->verificarSenha("12345678")){
    echo "<p>Senha correta!! </p>";
}else{
    echo "<p> ----- Senha incorreta ----- </p>";
}


?>