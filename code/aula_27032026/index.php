<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capítulo 6</title>
</head>
<body>
<p>    
    <a href="notas.php">Exemplo de formulário PHP com arrays</a>
</p>
    <?php
$frutas = array("Maçã", "Banana", "Laranja");
echo($frutas[0]);



$pessoa = array(
    "nome" => "Ana",
    "idade" => 25,
    "cidade" => "Londrina"
);

echo("<br>Nome: ".$pessoa["nome"]."<br>Idade: ".$pessoa["idade"]);
echo("<br>Cidade: {$pessoa["cidade"]} <br>");

// $frutas = array("Maçã", "Banana", "Laranja"); // Já esta declarado na linha 2

foreach ($frutas as $fruta) {
    echo "<p>".$fruta."</p>";
}
// push com elementos
$nomes = array("Juliana");
array_push($nomes, "Maria", "Claudia");

print_r($nomes);
echo("<br>Contagem: ". count($nomes));
// push com array
$nomes2 = array("Juliana");
array_push($nomes2, $frutas);

print_r($nomes2);
echo("<br>Count: ". count($nomes2));

$valores = array(3, 1, 2);
sort($valores);
print_r($valores);

?>
</body>
</html>
