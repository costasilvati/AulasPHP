# PHP - Forms e estruturas de controle

Neste capítulo avançaremos no estudo de PHP com foco em três grupos de conceitos muito importantes para o desenvolvimento web: o uso de **variáveis superglobais**, a **recepção de dados enviados por formulários HTML** e as **estruturas de controle de fluxo e repetição**.

Esses conteúdos são fundamentais porque representam uma transição importante entre a escrita de páginas estáticas e a construção de aplicações com comportamento dinâmico. A partir deste ponto, o programa deixa de apenas exibir mensagens fixas e passa a **receber dados do usuário**, **tomar decisões** e **repetir ações conforme determinadas condições**.

No material da aula, esses conceitos aparecem associados às variáveis globais do PHP, constantes, formulários com método `GET`, estruturas `if/else`, `switch case` e laços `while`, `do while` e `for`. :contentReference[oaicite:1]{index="1"}

## Variáveis superglobais em PHP

Além das variáveis criadas pelo programador, o PHP possui variáveis internas chamadas de **superglobais**. Elas recebem esse nome porque podem ser acessadas em qualquer parte do script, sem necessidade de declaração prévia. O material da aula destaca esse comportamento ao explicar que essas variáveis nativas estão disponíveis em qualquer local do código. :contentReference[oaicite:2]{index="2"}

As superglobais mais importantes neste momento são:

-   `$GLOBALS`
-   `$_SERVER`
-   `$_GET`
-   `$_POST`
-   `$_FILES`
-   `$_COOKIE`
-   `$_SESSION`
-   `$_REQUEST`
-   `$_ENV`

### `$GLOBALS` {.unnumbered}

A variável `$GLOBALS` armazena, em forma de array associativo, as variáveis globais existentes no script.

Exemplo:

``` php
<?php
$curso = "Desenvolvimento de Sistemas";

function mostrarCurso() {
    echo $GLOBALS['curso'];
}

mostrarCurso();
?>
```

Nesse caso, a função consegue acessar a variável global `$curso` por meio de `$GLOBALS`.

### `$_SERVER` {.unnumbered}

A superglobal `$_SERVER` contém informações sobre o servidor e o ambiente de execução do script.

Exemplo:

``` php
<?php
echo "Nome do servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Arquivo atual: " . $_SERVER['PHP_SELF'];
?>
```

Esse tipo de variável é útil para obter dados técnicos do ambiente da aplicação.

### `$_GET` e `$_POST` {.unnumbered}

Essas são as superglobais mais utilizadas no início do estudo de PHP web.

-   `$_GET` recebe dados enviados pela URL
-   `$_POST` recebe dados enviados no corpo da requisição

No material, o envio por `GET` é destacado como aquele em que os valores aparecem na barra de endereços do navegador, enquanto no `POST` isso não ocorre.

### Outras superglobais {.unnumbered}

As demais variáveis têm funções específicas:

-   `$_FILES`: dados de arquivos enviados por formulário
-   `$_COOKIE`: dados armazenados em cookies
-   `$_SESSION`: dados mantidos durante a sessão do usuário
-   `$_REQUEST`: combinação de `$_GET`, `$_POST` e `$_COOKIE`
-   `$_ENV`: informações do ambiente

Mesmo que nem todas sejam utilizadas agora, é importante conhecê-las como parte do ecossistema da linguagem.

## Constantes em PHP

Uma constante é um identificador cujo valor não muda durante a execução do programa. O material ressalta que constantes podem ser acessadas de qualquer lugar do código e que, por boa prática, seus nomes costumam ser escritos em letras maiúsculas.

Há duas formas principais de definir constantes em PHP.

### Utilizando `define()` {.unnumbered}

``` php
<?php
define("SAUDACAO", "Olá, turma!<br>");
echo SAUDACAO;
?>
```

### Utilizando `const` {.unnumbered}

``` php
<?php
const LIMITE_NOTA = 10;
echo LIMITE_NOTA;
?>
```

Diferentemente das variáveis, constantes **não usam o símbolo `$`**.

## Constantes mágicas

O material também apresenta as chamadas **constantes mágicas**, que fornecem informações sobre o contexto do código, como linha atual, arquivo, diretório, função e classe.

Alguns exemplos úteis:

``` php
<?php
echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
?>
```

Essas constantes são especialmente úteis em depuração, manutenção e organização do código.

## Formulários em PHP

O formulário é a principal forma de interação entre usuário e servidor em aplicações web. Por meio dele, o usuário pode informar dados que serão enviados ao PHP para processamento.

No material, a configuração do formulário destaca dois atributos fundamentais: `method`, que define o tipo de envio (`GET` ou `POST`), e `action`, que indica qual arquivo irá processar os dados enviados.

## Configurando formulários

A seguir está uma versão em código PHP/HTML do exemplo apresentado no slide de configuração de formulários.

### Arquivo `index.php` {.unnumbered}

``` php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário PHP</title>
</head>
<body>

    <div class="titulo">
        <h1>Formulário PHP</h1>
    </div>

    <div class="formulario">
        <form action="welcome.php" method="get">
            <p>
                Nome:
                <input class="texto" type="text" name="name">
            </p>

            <p>
                E-mail:
                <input class="texto" type="text" name="email">
            </p>

            <input class="botao" type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>
```

Nesse formulário:

-   `action="welcome.php"` indica o arquivo que receberá os dados
-   `method="get"` define que os dados serão enviados pela URL
-   `name="name"` e `name="email"` identificam os campos

## Recebendo dados via GET

O slide sobre `$_GET` mostra que essa variável funciona como um vetor associativo, em que cada posição corresponde a um parâmetro enviado.

Abaixo está uma versão equivalente do exemplo apresentado.

### Arquivo `welcome.php` {.unnumbered}

``` php
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
        Bem-vindo <?php echo $_GET["name"]; ?>! <br>
        Seu e-mail é: <?php echo $_GET["email"]; ?>
    </div>

</body>
</html>
```

Quando o formulário for enviado, o PHP poderá recuperar os dados usando as chaves `name` e `email`.

### Observação importante {.unnumbered}

Antes de acessar um índice de `$_GET`, é boa prática verificar se ele realmente existe.

Exemplo mais seguro:

``` php
<?php
if (isset($_GET["name"]) && isset($_GET["email"])) {
    $nome = $_GET["name"];
    $email = $_GET["email"];

    echo "Bem-vindo $nome <br>";
    echo "Seu e-mail é: $email";
} else {
    echo "Dados não enviados.";
}
?>
```

## Operadores de comparação

Antes de trabalhar com decisões, é importante compreender os operadores de comparação, que retornam `true` ou `false`. O material lista os principais operadores: igualdade, identidade, diferença, menor, maior, menor ou igual e maior ou igual [@dallphp].

Alguns exemplos:

``` php
<?php
$a = 5;
$b = 10;

var_dump($a == $b);   // false
var_dump($a < $b);    // true
var_dump($a <= 5);    // true
?>
```

Esses operadores são a base das estruturas condicionais.

## IF ELSE - Controle de fluxo

O `if/else` é utilizado para definir ações a partir de uma condição lógica. No material, esse conceito é apresentado com um formulário que recebe duas notas e calcula a média do aluno.

### Formulário para enviar as notas {.unnumbered}

#### Arquivo `index.php` {.unnumbered}

``` php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Controle de fluxo com if/else</title>
</head>
<body>

    <p>Digite as notas e veja o resultado final do semestre:</p>

    <form action="condicao.php" method="get">
        <p>
            Nota 1:
            <input class="texto" type="number" name="valor1" step="0.1">
        </p>

        <p>
            Nota 2:
            <input class="texto" type="number" name="valor2" step="0.1">
        </p>

        <input class="botao" type="submit" value="Calcular">
    </form>

</body>
</html>
```

### Recebendo os valores e calculando a média {.unnumbered}

#### Arquivo `condicao.php` {.unnumbered}

``` php
<?php
$nota1 = $_GET["valor1"];
$nota2 = $_GET["valor2"];
$media = ($nota1 + $nota2) / 2;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da média</title>
</head>
<body>

    <p>Sua média é <?php echo $media; ?></p>

</body>
</html>
```

### Aplicando as condições {.unnumbered}

O exemplo do slide classifica a situação do aluno conforme a média calculada.

``` php
<?php
$nota1 = $_GET["valor1"];
$nota2 = $_GET["valor2"];
$media = ($nota1 + $nota2) / 2;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Situação final</title>
</head>
<body>

    <p>Sua média é <?php echo $media; ?></p>

    <p>
        Sua situação é:
        <?php
        if ($media >= 6.0) {
            echo "APROVADO!";
        } else if ($media >= 2.0) {
            echo "RECUPERAÇÃO.";
        } else {
            echo "REPROVADO.";
        }
        ?>
    </p>

</body>
</html>
```

Essa estrutura permite executar blocos diferentes de código conforme o valor da expressão lógica.

## Switch case - Controle de fluxo

A estrutura `switch` é indicada quando queremos comparar o valor de uma variável com várias opções possíveis. No material, o exemplo usa a variável `$favcolor` para determinar uma mensagem correspondente.

``` php
<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Sua cor favorita é vermelho!";
        break;

    case "blue":
        echo "Sua cor favorita é azul!";
        break;

    case "green":
        echo "Sua cor favorita é verde!";
        break;

    default:
        echo "Sua cor favorita não é vermelho, azul nem verde.";
}
?>
```

### Quando usar `switch`? {.unnumbered}

O `switch` é útil quando:

-   há várias comparações com a mesma variável
-   os casos são valores bem definidos
-   deseja-se evitar muitos `if/else if`

## Loops em PHP

Laços de repetição permitem executar um mesmo bloco de código várias vezes. O material aborda os laços `while`, `do while` e `for`, que são fundamentais para automação de tarefas e processamento de listas ou sequências.

### while {.unnumbered}

O `while` executa um bloco de código enquanto uma condição for verdadeira. O slide apresenta um contador que começa em 1 e é executado enquanto for menor que 6.

``` php
<?php
$i = 1;

while ($i < 6) {
    echo $i . "<br>";
    $i++;
}
?>
```

Nesse exemplo, o resultado exibido será:

``` text
1
2
3
4
5
```

### do while {.unnumbered}

O `do while` é parecido com o `while`, mas possui uma diferença importante: ele executa o bloco pelo menos uma vez, e só depois testa a condição.

O material mostra um exemplo em que `$i` começa com 8 e a condição é `$i < 6`. Mesmo assim, o código executa uma vez.

``` php
<?php
$i = 8;

do {
    echo $i . "<br>";
    $i++;
} while ($i < 6);
?>
```

Nesse caso, o número `8` será exibido uma vez, pois o teste ocorre apenas após a execução inicial.

### for {.unnumbered}

O laço `for` é normalmente utilizado quando já sabemos quantas repetições serão realizadas. O material apresenta um contador de 0 até 10.

``` php
<?php
for ($x = 0; $x <= 10; $x++) {
    echo "O número é: $x <br>";
}
?>
```

A estrutura do `for` possui três partes:

1.  inicialização da variável de controle
2.  condição de repetição
3.  atualização da variável

### foreach {.unnumbered}

Embora o slide esteja no quadro do `for`, ele também apresenta um exemplo com `foreach`, usado para percorrer arrays associativos.

``` php
<?php
$membros = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($membros as $nome => $idade) {
    echo "$nome : $idade <br>";
}
?>
```

O `foreach` é especialmente útil para percorrer listas, vetores e estruturas associativas sem a necessidade de controlar índices manualmente [@miletto2014desenvolvimento].

### Comparando os laços {.unnumbered}
::: rmdwarning
Cada laço possui um contexto de uso mais apropriado:

-   `while`: quando a repetição depende de uma condição que pode variar durante a execução
-   `do while`: quando o bloco precisa ser executado ao menos uma vez
-   `for`: quando a quantidade de repetições é conhecida
-   `foreach`: quando se quer percorrer arrays
:::


## Exemplo integrando formulário e decisão

A seguir está um exemplo curto que integra formulário, `$_GET` e `if/else`.

### Arquivo `form_media.php` {.unnumbered}

``` php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo completo</title>
</head>
<body>

    <h1>Cálculo de média</h1>

    <form action="" method="get">
        <p>
            Nota 1:
            <input type="number" name="n1" step="0.1">
        </p>

        <p>
            Nota 2:
            <input type="number" name="n2" step="0.1">
        </p>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_GET["n1"]) && isset($_GET["n2"])) {
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $media = ($n1 + $n2) / 2;

        echo "<p>Média: $media</p>";

        if ($media >= 6) {
            echo "<p>APROVADO</p>";
        } else if ($media >= 2) {
            echo "<p>RECUPERAÇÃO</p>";
        } else {
            echo "<p>REPROVADO</p>";
        }
    }
    ?>

</body>
</html>
```

Esse tipo de exemplo é útil porque mostra, em um único arquivo, o ciclo completo de:

-   exibir formulário
-   receber dados
-   calcular valores
-   tomar decisão
-   mostrar resultado

## Integrando Bootstrap com PHP

Ao desenvolver aplicações web com PHP, é bastante comum utilizar **frameworks CSS** para melhorar a aparência visual das páginas sem a necessidade de escrever todo o estilo manualmente. Um dos frameworks mais populares para esse fim é o **Bootstrap**.

O Bootstrap fornece um conjunto de classes prontas para estilizar elementos HTML, como:

-   botões
-   formulários
-   tabelas
-   cards
-   menus
-   alertas
-   sistemas de grid para layout

Como o PHP é executado no servidor e o Bootstrap atua na camada de apresentação, a integração entre os dois é bastante simples: o PHP continua sendo responsável pela lógica da aplicação, enquanto o Bootstrap melhora a interface exibida no navegador.

### Como adicionar Bootstrap ao projeto {.unnumbered}

Uma forma prática de utilizar Bootstrap é incluir seu arquivo CSS por meio de um **CDN**, inserindo a referência no elemento `<head>` da página.

Exemplo:

``` html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
```

Também é possível adicionar o arquivo JavaScript do Bootstrap ao final do `body`, caso sejam utilizados componentes interativos como menus expansíveis, modais ou carrosséis.

``` html
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
```

### Relação entre PHP e Bootstrap {.unnumbered}

É importante observar que o Bootstrap **não substitui** o PHP e também **não processa dados**. Seu papel é exclusivamente visual.

Em uma página PHP com Bootstrap:

-   o **PHP** recebe dados, calcula resultados e toma decisões;
-   o **Bootstrap** organiza e estiliza os elementos HTML gerados.

Assim, podemos construir páginas com melhor aparência sem alterar a lógica principal do programa.

### Exemplo: formulário de média com Bootstrap

A seguir, temos uma versão estilizada do exemplo `form_media.php`, utilizando Bootstrap para melhorar a organização visual do formulário e da exibição do resultado.

``` php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média com PHP e Bootstrap</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h1 class="h4 mb-0">Cálculo de Média</h1>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            Informe duas notas para calcular a média final do aluno.
                        </p>

                        <form action="" method="get">
                            <div class="mb-3">
                                <label for="n1" class="form-label">Nota 1</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="n1"
                                    name="n1"
                                    step="0.1"
                                    min="0"
                                    max="10"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label for="n2" class="form-label">Nota 2</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="n2"
                                    name="n2"
                                    step="0.1"
                                    min="0"
                                    max="10"
                                    required
                                >
                            </div>

                            <button type="submit" class="btn btn-success">
                                Calcular média
                            </button>
                        </form>

                        <?php
                        if (isset($_GET["n1"]) && isset($_GET["n2"])) {
                            $n1 = (float) $_GET["n1"];
                            $n2 = (float) $_GET["n2"];
                            $media = ($n1 + $n2) / 2;

                            echo "<hr>";

                            echo "<div class='mt-3'>";
                            echo "<h2 class='h5'>Resultado</h2>";
                            echo "<p><strong>Média:</strong> " . number_format($media, 1, ',', '.') . "</p>";

                            if ($media >= 6) {
                                echo "<div class='alert alert-success' role='alert'>";
                                echo "Situação: APROVADO";
                                echo "</div>";
                            } elseif ($media >= 2) {
                                echo "<div class='alert alert-warning' role='alert'>";
                                echo "Situação: RECUPERAÇÃO";
                                echo "</div>";
                            } else {
                                echo "<div class='alert alert-danger' role='alert'>";
                                echo "Situação: REPROVADO";
                                echo "</div>";
                            }

                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

::: rmdimportant
**Explicando a estrutura do exemplo**

Nesse exemplo, o Bootstrap foi utilizado para melhorar a apresentação da página sem alterar a lógica do PHP.

Algumas classes importantes utilizadas foram:

-   `container`: centraliza e limita a largura do conteúdo
-   `row` e `col-md-8 col-lg-6`: organizam o layout em colunas responsivas
-   `card`: cria um painel visual para agrupar os elementos
-   `form-control`: estiliza os campos do formulário
-   `btn btn-success`: estiliza o botão
-   `alert alert-success`, `alert alert-warning` e `alert alert-danger`: exibem mensagens com destaque visual

Já o PHP continua responsável por:

-   verificar se os dados foram enviados com `isset()`
-   converter os valores para número
-   calcular a média
-   decidir a situação do aluno com `if`, `elseif` e `else`
-   gerar dinamicamente a mensagem exibida na página

:::

## Vantagens de usar Bootstrap com PHP

A integração entre Bootstrap e PHP traz várias vantagens no desenvolvimento das aplicações da disciplina:

-   melhora rapidamente a aparência das páginas;
-   facilita a criação de interfaces mais organizadas;
-   reduz o tempo gasto com CSS básico;
-   permite foco maior na lógica de programação e no funcionamento do back-end;
-   ajuda a construir páginas responsivas, adaptáveis a diferentes tamanhos de tela.

## Boas práticas!

Ao combinar Bootstrap com PHP, algumas recomendações são importantes:

-   manter a lógica PHP organizada e separada da apresentação sempre que possível;
-   usar o Bootstrap para estilização, evitando excesso de estilos inline;
-   validar os dados recebidos no PHP, mesmo que o formulário tenha validações HTML;
-   utilizar nomes de classes e estruturas de layout de forma consistente.

Ao utilizar formulários e estruturas de controle em PHP, algumas práticas devem ser incentivadas desde o início:

-   verificar se os dados realmente foram enviados com `isset()`
-   validar campos antes de utilizá-los
-   usar nomes de variáveis claros
-   separar, sempre que possível, HTML e lógica
-   comentar trechos importantes do código

<!-- ## Sugestão de atividade prática -->

<!-- Como exercício complementar, você pode adaptar outros exemplos já desenvolvidos na aula para utilizar Bootstrap. Algumas possibilidades são: -->

<!-- * estilizar o formulário de nome e e-mail enviado via `GET`; -->

<!-- * criar uma versão com Bootstrap para o exercício de cadastro; -->

<!-- * exibir mensagens condicionais com `alert`; -->

<!-- * organizar os resultados em cards ou tabelas. -->

## Atividades

Com base nos conteúdos estudados, desenvolva os exercícios propostos no material da aula. Eles envolvem decisões condicionais, comparação de valores e associação entre entrada do usuário e processamento com PHP.

::: rmdcaution
> **Atenção!!!** É obrigatório o uso de [Bootstrap](https://getbootstrap.com) para estilizar os formulários.
:::


1.  Construir um algoritmo que leia dois números e efetue a adição.

-   Se a soma for maior que 10, apresentar o resultado somando 8;
-   Se a soma for menor ou igual a 10, apresentar o resultado subtraindo 5.

2.  Ler três números diferentes e exibi-los em ordem decrescente.

3.  Ler nome, gênero e idade de uma pessoa. Se a idade for 18 ou mais, exibir a mensagem: `Você pode se cadastrar` Caso contrário, exibir: `Você não pode se cadastrar`

4.  Ler um número entre 1 e 12 e exibir o mês correspondente. Caso o valor esteja fora do intervalo, informar que não existe mês correspondente

## Leituras recomendadas

BENTO, Evaldo Junior. *Desenvolvimento web com PHP e MySQL*. São Paulo: Casa do Código, 2015.

SARAIVA, Maurício de Oliveira; BARRETO, Jeanine dos Santos. *Desenvolvimento de Sistemas PHP*. Grupo A, 2018.
