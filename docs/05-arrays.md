# Operações com arrays e matrizes em PHP

Neste capítulo serão abordados conceitos fundamentais para manipulação de dados em PHP utilizando **arrays e matrizes**. Essas estruturas são essenciais para trabalhar com coleções de valores, sendo amplamente utilizadas em aplicações web reais, como listas de usuários, produtos e resultados de consultas ao banco de dados.

Os exemplos apresentados são baseados na documentação oficial do PHP (php.net) e materiais de referência como W3Schools.

---

## O que são arrays

Um **array** é uma estrutura de dados que permite armazenar múltiplos valores em uma única variável.

Em PHP, os arrays são extremamente flexíveis, podendo armazenar:

- números
- textos
- booleanos
- até outros arrays

### Exemplo de array simples

```php
<?php
$frutas = array("Maçã", "Banana", "Laranja");

echo $frutas[0];
?>
````

### Resultado esperado

```text
Maçã
```

Neste exemplo:

* `$frutas[0]` acessa o primeiro elemento do array
* os índices começam em 0

---

## Diagrama: estrutura de um array {-}


```{=html}
<div class="grViz html-widget html-fill-item" id="htmlwidget-b5a1dde0bfbea7edd4ee" style="width:672px;height:480px;"></div>
<script type="application/json" data-for="htmlwidget-b5a1dde0bfbea7edd4ee">{"x":{"diagram":"\ndigraph array_simples {\n  graph [layout = dot, rankdir = LR]\n\n  node [shape = rectangle, style = filled, fillcolor = LightBlue, fontname = Helvetica]\n\n  A [label = \"Array frutas\"]\n  B [label = \"0: Maçã\"]\n  C [label = \"1: Banana\"]\n  D [label = \"2: Laranja\"]\n\n  A -> B\n  A -> C\n  A -> D\n}\n","config":{"engine":"dot","options":null}},"evals":[],"jsHooks":[]}</script>
```


---

## Arrays associativos

Arrays associativos utilizam **chaves nomeadas** em vez de índices numéricos.

### Exemplo

```php
<?php
$pessoa = array(
    "nome" => "Ana",
    "idade" => 25,
    "cidade" => "Londrina"
);

echo $pessoa["nome"];
?>
```

### Resultado esperado

```text
Ana
```

Neste caso:

* `"nome"` é a chave
* `"Ana"` é o valor

---

## Iterando arrays com foreach

O `foreach` é utilizado para percorrer arrays de forma simples.

### Exemplo

```php
<?php
$frutas = array("Maçã", "Banana", "Laranja");

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>
```

### Resultado esperado

```text
Maçã
Banana
Laranja
```

---

## Arrays multidimensionais (matrizes)

Uma **matriz** é um array que contém outros arrays.

### Exemplo

```php
<?php
$alunos = array(
    array("Ana", 8.5),
    array("Carlos", 6.0),
    array("Maria", 9.2)
);

echo $alunos[0][0];
?>
```

### Resultado esperado

```text
Ana
```

---
## Diagrama: matriz em PHP {-}


```{=html}
<div class="grViz html-widget html-fill-item" id="htmlwidget-6b615bca9b572da4c8e0" style="width:672px;height:480px;"></div>
<script type="application/json" data-for="htmlwidget-6b615bca9b572da4c8e0">{"x":{"diagram":"\ndigraph matriz_php {\n  graph [layout = dot, rankdir = TB]\n\n  node [shape = rectangle, style = filled, fillcolor = LightYellow, fontname = Helvetica]\n\n  A  [label = \"alunos\"]\n  B  [label = \"0\"]\n  C  [label = \"1\"]\n  D  [label = \"2\"]\n\n  B1 [label = \"Ana\"]\n  B2 [label = \"8.5\"]\n\n  C1 [label = \"Carlos\"]\n  C2 [label = \"6.0\"]\n\n  D1 [label = \"Maria\"]\n  D2 [label = \"9.2\"]\n\n  A -> B\n  A -> C\n  A -> D\n\n  B -> B1\n  B -> B2\n\n  C -> C1\n  C -> C2\n\n  D -> D1\n  D -> D2\n}\n","config":{"engine":"dot","options":null}},"evals":[],"jsHooks":[]}</script>
```


---

## Percorrendo matrizes

Para percorrer uma matriz, utilizamos loops aninhados.

### Exemplo

```php
<?php
$alunos = array(
    array("Ana", 8.5),
    array("Carlos", 6.0),
    array("Maria", 9.2)
);

for ($i = 0; $i < count($alunos); $i++) {
    echo "Aluno: " . $alunos[$i][0] . " - Nota: " . $alunos[$i][1] . "<br>";
}
?>
```

### Resultado esperado

```text
Aluno: Ana - Nota: 8.5
Aluno: Carlos - Nota: 6.0
Aluno: Maria - Nota: 9.2
```

---

## Funções úteis para arrays

PHP possui diversas funções para manipulação de arrays.

### count()

Conta o número de elementos

```php
<?php
$frutas = array("Maçã", "Banana", "Laranja");
echo count($frutas);
?>
```

Resultado:

```text
3
```

---

### array_push()

Adiciona elementos ao final

```php
<?php
$frutas = array("Maçã");
array_push($frutas, "Banana", "Laranja");

print_r($frutas);
?>
```

Resultado:

```text
Array ( [0] => Maçã [1] => Banana [2] => Laranja )
```

---

### sort()

Ordena o array

```php
<?php
$numeros = array(3, 1, 2);
sort($numeros);

print_r($numeros);
?>
```

Resultado:

```text
Array ( [0] => 1 [1] => 2 [2] => 3 )
```

---

## Fluxo de processamento com arrays {-}


```{=html}
<div class="grViz html-widget html-fill-item" id="htmlwidget-eb61e12d593cbe735c7e" style="width:672px;height:480px;"></div>
<script type="application/json" data-for="htmlwidget-eb61e12d593cbe735c7e">{"x":{"diagram":"\ndigraph fluxo_arrays {\n  graph [layout = dot, rankdir = TB]\n\n  node [shape = rectangle, style = rounded, fontname = Helvetica, color = DarkGreen]\n\n  A [label = \"Entrada de dados\"]\n  B [label = \"Armazenar em array\"]\n  C [label = \"Processamento\"]\n  D [label = \"Exibir resultado\"]\n\n  A -> B -> C -> D\n}\n","config":{"engine":"dot","options":null}},"evals":[],"jsHooks":[]}</script>
```


---

## Exemplo prático: formulário com arrays

Neste exemplo, o usuário digita três notas, que são armazenadas em um array e processadas pelo PHP.

### Código completo

```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Notas com Array</title>
</head>
<body>

<h1>Cadastro de Notas</h1>

<form method="post">
    Nota 1: <input type="number" name="nota1" step="0.1"><br><br>
    Nota 2: <input type="number" name="nota2" step="0.1"><br><br>
    Nota 3: <input type="number" name="nota3" step="0.1"><br><br>

    <button type="submit">Calcular Média</button>
</form>

<?php
if (isset($_POST["nota1"], $_POST["nota2"], $_POST["nota3"])) {

    $notas = array(
        $_POST["nota1"],
        $_POST["nota2"],
        $_POST["nota3"]
    );

    $soma = 0;

    foreach ($notas as $nota) {
        $soma += $nota;
    }

    $media = $soma / count($notas);

    echo "<h2>Resultado</h2>";
    echo "Notas: " . implode(", ", $notas) . "<br>";
    echo "Média: " . number_format($media, 2, ",", ".") . "<br>";

    if ($media >= 6) {
        echo "Situação: APROVADO";
    } else {
        echo "Situação: REPROVADO";
    }
}
?>

</body>
</html>
```

---

## Explicação do exemplo

Neste exemplo:

* os dados são enviados via formulário (`POST`)
* as notas são armazenadas em um **array**
* o `foreach` percorre os valores
* a média é calculada
* o resultado é exibido dinamicamente

---

## Resultado esperado

Se o usuário digitar:

```text
7, 8, 9
```

Saída:

```text
Notas: 7, 8, 9
Média: 8.00
Situação: APROVADO
```

---
## Atividade de aula
Desenvolva uma página PHP com Bootstrap para simular o registro de um pedido em uma lanchonete.

O formulário deve conter os seguintes campos:
- nome do cliente
- produto principal (select)
- tamanho do pedido (radio)
- adicionais desejados (checkbox)
- quantidade

Ao enviar o formulário, o PHP deve:
- receber os dados via POST
- exibir o nome do cliente
- exibir o produto escolhido
- exibir o tamanho selecionado
- exibir os adicionais marcados
- exibir a quantidade informada
- mostrar um resumo final do pedido

Utilize Bootstrap para estilizar a página, o formulário, o botão e a área de resultado.

Desafio extra:
- exibir uma mensagem especial para pedidos com mais de 3 unidades ou com 2 ou mais adicionais.
