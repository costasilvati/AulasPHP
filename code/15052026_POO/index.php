<?php
// Sempre importar arquivos das classes utilizadas
require_once('Cliente.php'); 
$cliente = new Cliente("Maria da Silva", "maria@email.com");
//$cliente->nome = "Maria";
//$cliente->email = "maria@email.com";

echo $cliente->nome;

// Testando método da classe Produto
require_once('Produto.php'); // importando a classe
$prod = new Produto();
$prod->nome = "Seda - pacote";
$prod->preco = 3.5;

echo "<p> {$prod->exibirResumo()} </p>";
echo "<p>Desconto: {$prod->calcularDesconto(10)}</p>";
?>