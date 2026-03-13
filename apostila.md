--- 
title: "Desenvolvimento de Sistemas"
author: "Juliana Costa Silva"
date: "2026-03-13"
site: bookdown::bookdown_site
documentclass: book
bibliography: [book.bib, packages.bib]
# url: your book url like https://bookdown.org/yihui/bookdown
# cover-image: path to the social sharing image like images/cover.jpg
description: |
  This is a minimal example of using the bookdown package to write a book.
  The HTML output format for this example is bookdown::bs4_book,
  set in the _output.yml file.
biblio-style: apalike
csl: chicago-fullnote-bibliography.csl
---

# Sobre

Este é um _e-book_ escrito em R **Markdown**. Sera utilizado como material de apoio da disciplina de Desenvolvimento de sistemas.

## Como utilizar este material

Este e-book foi elaborado como material de apoio para a disciplina e tem como objetivo complementar as aulas teóricas e práticas. Ao longo dos capítulos serão apresentados conceitos fundamentais do desenvolvimento web utilizando **PHP**, exemplos de código e atividades práticas que permitem aplicar os conteúdos estudados.

O material foi organizado de forma **progressiva**, partindo dos conceitos básicos da linguagem até tópicos mais estruturados utilizados no desenvolvimento de aplicações web completas. Dessa forma, recomenda-se que os capítulos sejam estudados **na ordem em que são apresentados**, pois muitos conceitos dependem de conteúdos discutidos anteriormente.

### Organização dos capítulos

Cada capítulo do material segue, em geral, a seguinte estrutura:

- **Apresentação do conceito** – introdução teórica do tema abordado;
- **Exemplos de código** – pequenos trechos de código que ilustram o funcionamento da linguagem;
- **Explicações passo a passo** – detalhamento de como o código funciona;
- **Atividades ou exercícios** – propostas de implementação para consolidar o aprendizado.

Os exemplos apresentados no texto foram pensados para serem executados diretamente no ambiente de desenvolvimento utilizado na disciplina.

### Aprendizado baseado em prática

A programação é uma habilidade que se desenvolve principalmente por meio da prática. Por esse motivo, é altamente recomendado que o estudante **não apenas leia o código apresentado**, mas também:

- reproduza os exemplos em seu próprio ambiente de desenvolvimento;
- modifique partes do código para observar diferentes comportamentos;
- implemente as atividades propostas ao final de cada capítulo.

A experimentação é parte fundamental do processo de aprendizagem em programação.

### Execução dos exemplos

Sempre que um exemplo de código for apresentado, recomenda-se que ele seja salvo como um arquivo PHP dentro da pasta de projetos utilizada na disciplina. Após salvar o arquivo, o estudante poderá executá-lo através do navegador, utilizando o servidor local configurado no ambiente de desenvolvimento.

Esse processo permite observar como o código PHP é executado no servidor e como o resultado é exibido no navegador.

### Relação com as aulas

Este material não substitui as aulas, mas funciona como um **guia de referência e estudo**. Durante as aulas serão apresentados exemplos adicionais, atividades práticas e discussões que complementam o conteúdo descrito no e-book.

Recomenda-se que os estudantes utilizem este material para:

- revisar conceitos discutidos em aula;
- consultar exemplos de código;
- apoiar a realização das atividades propostas;
- aprofundar o entendimento sobre os tópicos estudados.

### Evolução dos projetos

Ao longo da disciplina, os exercícios e exemplos irão evoluir gradualmente, permitindo que os estudantes passem de programas simples para estruturas mais organizadas de desenvolvimento, incluindo:

- uso de **programação orientada a objetos em PHP**;
- organização do código utilizando o padrão **Model-View-Controller (MVC)**;
- integração de aplicações com **bancos de dados**.

Essa progressão busca aproximar o estudante do modo como aplicações web reais são desenvolvidas.

### Recomendações de estudo

Para aproveitar melhor este material, recomenda-se:

- acompanhar os exemplos com o ambiente de desenvolvimento aberto;
- manter um repositório ou pasta organizada com os exercícios desenvolvidos;
- revisar regularmente os conceitos apresentados nos capítulos anteriores;
- buscar compreender não apenas *como* o código funciona, mas também *por que* ele foi estruturado daquela forma.

A combinação entre leitura, prática e experimentação permitirá desenvolver gradualmente as competências necessárias para a construção de aplicações web utilizando PHP.

<!--chapter:end:index.Rmd-->

# Apresentação da disciplina

O desenvolvimento de aplicações web modernas envolve a integração de diferentes tecnologias que atuam em camadas distintas de um sistema. Nas disciplinas iniciais de programação web, é comum que o estudante tenha contato com tecnologias voltadas ao **lado do cliente**, como HTML, CSS e JavaScript, responsáveis pela estrutura, apresentação e interação das páginas exibidas no navegador.

No entanto, muitas funcionalidades presentes em aplicações web reais dependem de processamento no **lado do servidor**, como autenticação de usuários, manipulação de dados, geração dinâmica de páginas e comunicação com bancos de dados. É nesse contexto que se insere o estudo de linguagens de programação voltadas ao **desenvolvimento back-end**.

Este material foi desenvolvido como apoio à disciplina e tem como objetivo introduzir os conceitos fundamentais para o desenvolvimento de aplicações web utilizando **PHP**. A linguagem PHP é amplamente utilizada na construção de sistemas web e possui um ecossistema consolidado que permite o desenvolvimento de aplicações robustas, escaláveis e integradas com diferentes tecnologias.

Ao longo deste e-book serão abordados os principais conceitos necessários para compreender o funcionamento de aplicações web baseadas em PHP. Inicialmente serão apresentados os fundamentos da linguagem, incluindo **sintaxe básica, variáveis, operadores, estruturas de controle e manipulação de dados**. Esses tópicos retomam conceitos estudados anteriormente em disciplinas de algoritmos e programação, agora aplicados ao contexto do desenvolvimento web.

Na sequência, o material introduz conceitos de **programação orientada a objetos em PHP**, explorando elementos como classes, objetos, encapsulamento e organização do código. A utilização da orientação a objetos é essencial para o desenvolvimento de aplicações mais organizadas e de maior porte.

Outro tema importante abordado nesta disciplina é o padrão arquitetural **Model-View-Controller (MVC)**, amplamente utilizado no desenvolvimento de aplicações web. Esse padrão permite separar responsabilidades dentro de um sistema, organizando o código em camadas responsáveis pela lógica de negócio, interface com o usuário e controle das requisições da aplicação.

Além disso, serão apresentados os fundamentos de **integração com bancos de dados**, permitindo que aplicações PHP possam armazenar, consultar e manipular informações persistentes. Essa etapa é essencial para a construção de sistemas reais, como cadastros de usuários, gerenciamento de produtos e outras aplicações baseadas em dados.

Para o desenvolvimento das atividades práticas será utilizado um ambiente composto por:

- **XAMPP**, responsável por fornecer o servidor web Apache, o interpretador PHP e o sistema gerenciador de banco de dados utilizados nas aulas;
- **Visual Studio Code (VSCode)**, utilizado como ambiente de desenvolvimento para edição e organização dos códigos.

Ao final da disciplina, espera-se que o estudante seja capaz de compreender o funcionamento básico de aplicações web desenvolvidas com PHP, implementar funcionalidades no lado do servidor, organizar projetos utilizando o padrão MVC e integrar suas aplicações com bancos de dados.

Este material foi elaborado como guia de apoio às aulas, contendo explicações conceituais, exemplos de código e atividades práticas que incentivam a experimentação e o desenvolvimento progressivo das habilidades necessárias para a construção de aplicações web.


## Ambiente de desenvolvimento utilizado na disciplina

Para o desenvolvimento das atividades práticas desta disciplina será utilizado um ambiente de desenvolvimento local composto por duas ferramentas principais: **XAMPP** e **Visual Studio Code (VSCode)**. Esse conjunto de ferramentas permite que os estudantes desenvolvam e executem aplicações PHP diretamente em seus computadores, simulando o funcionamento de um servidor web real.

### XAMPP

O **XAMPP** é um pacote de software que reúne diferentes componentes necessários para o desenvolvimento de aplicações web. Ele facilita a configuração do ambiente de servidor local, evitando a necessidade de instalar e configurar manualmente cada ferramenta separadamente.

Entre os principais componentes do XAMPP estão:

- **Apache** – servidor web responsável por processar requisições HTTP e executar scripts PHP;
- **PHP** – interpretador da linguagem utilizado para executar os códigos desenvolvidos;
- **MySQL/MariaDB** – sistema gerenciador de banco de dados utilizado para armazenar informações das aplicações;
- **phpMyAdmin** – ferramenta web utilizada para administração de bancos de dados.

Ao iniciar o Apache através do painel do XAMPP, o computador passa a funcionar como um **servidor web local**, permitindo que aplicações PHP sejam executadas e acessadas pelo navegador.

Por padrão, os arquivos da aplicação devem ser armazenados na pasta:

```

xampp/htdocs

```

Os projetos criados dentro dessa pasta podem ser acessados através do navegador utilizando o endereço:

```

[http://localhost/nome-da-pasta](http://localhost/nome-da-pasta)

```

Essa forma de acesso é importante porque o PHP precisa ser executado pelo servidor web antes de ser enviado ao navegador.

### Visual Studio Code (VSCode)

O **Visual Studio Code (VSCode)** será utilizado como editor de código durante a disciplina. Trata-se de um ambiente de desenvolvimento leve, gratuito e amplamente utilizado por profissionais da área de desenvolvimento web.

Entre as principais funcionalidades do VSCode destacam-se:

- destaque de sintaxe para diversas linguagens;
- autocompletar de código;
- organização de projetos em pastas;
- integração com controle de versão (Git);
- suporte a extensões que ampliam as funcionalidades do editor.

Durante as aulas, o VSCode será utilizado para:

- criar e editar arquivos PHP;
- organizar a estrutura dos projetos;
- visualizar e modificar arquivos HTML, CSS e JavaScript utilizados nas aplicações.

Para melhorar a experiência de desenvolvimento, recomenda-se a instalação de algumas extensões úteis para PHP, como:

- **PHP Intelephense**
- **PHP Debug**
- **Prettier ou similar para formatação de código**

### Estrutura básica de um projeto

Durante a disciplina, os projetos geralmente seguirão uma estrutura simples dentro da pasta `htdocs`, por exemplo:

```

htdocs
└── projeto-aula
├── index.php
├── css
│   └── estilo.css
├── js
│   └── script.js
└── views

```

Essa organização facilita a separação entre diferentes tipos de arquivos utilizados na aplicação.

### Fluxo de desenvolvimento utilizado nas aulas

De forma geral, o processo de desenvolvimento durante as atividades práticas seguirá os seguintes passos:

1. Criar a pasta do projeto dentro da pasta `htdocs`;
2. Abrir a pasta do projeto no VSCode;
3. Criar ou editar arquivos PHP;
4. Iniciar o servidor Apache no XAMPP;
5. Acessar a aplicação pelo navegador através do endereço `localhost`.

Esse fluxo permite desenvolver, testar e modificar aplicações rapidamente durante as aulas, facilitando o aprendizado prático dos conceitos apresentados na disciplina.

<!--chapter:end:01-intro.Rmd-->

# Introdução à linguagem PHP

Nesta aula iniciaremos o estudo da linguagem **PHP**, uma das tecnologias mais utilizadas para desenvolvimento **web no lado do servidor**.

Até este momento da disciplina vocês trabalharam com **HTML, CSS e JavaScript**, tecnologias que executam diretamente no navegador. O PHP, por outro lado, é executado **no servidor**, permitindo criar páginas dinâmicas e aplicações web completas.

Segundo a documentação oficial da linguagem, PHP é uma linguagem de script open source amplamente utilizada e especialmente adequada para desenvolvimento web, podendo ser **embutida dentro do HTML**. :contentReference[oaicite:1]{index="1"}

------------------------------------------------------------------------

## Como funciona uma aplicação web

Aplicações web modernas são compostas por diferentes componentes que trabalham juntos para processar informações e entregar conteúdo ao usuário. De forma simplificada, uma aplicação web pode ser entendida como uma interação entre três elementos principais:

-   **Cliente**
-   **Servidor**
-   **Banco de dados**

Cada um desses componentes possui responsabilidades específicas dentro do funcionamento do sistema.

### Cliente {.unnumbered}

O **cliente** é o dispositivo utilizado pelo usuário para acessar a aplicação. Na maioria dos casos, o cliente é representado pelo **navegador web**, como Google Chrome, Firefox ou Edge.

No lado do cliente são executadas principalmente tecnologias como:

-   **HTML** – estrutura da página;
-   **CSS** – estilo e aparência visual;
-   **JavaScript** – interatividade e manipulação da interface.

Essas tecnologias são responsáveis por apresentar a interface ao usuário e capturar suas ações, como clicar em botões, preencher formulários ou navegar entre páginas.

Quando o usuário realiza alguma ação que exige processamento adicional (por exemplo, enviar um formulário ou solicitar dados), o navegador envia uma **requisição** para o servidor.

### Servidor {.unnumbered}

O **servidor** é responsável por receber as requisições enviadas pelo cliente, processar as informações e gerar uma resposta adequada.

No contexto desta disciplina, o processamento no servidor será realizado utilizando **PHP**. O código PHP é executado no servidor web (Apache, no caso do XAMPP) antes que a resposta seja enviada ao navegador.

O servidor pode realizar diversas tarefas, como:

-   processar dados enviados por formulários;
-   executar regras de negócio da aplicação;
-   acessar bancos de dados;
-   gerar conteúdo dinâmico;
-   validar informações enviadas pelo usuário.

Após processar a requisição, o servidor gera uma resposta — geralmente em formato **HTML** — que será enviada de volta ao navegador.

### Banco de dados {.unnumbered}

Muitas aplicações web precisam armazenar informações de forma persistente. Para isso, utilizam **bancos de dados**.

O banco de dados permite armazenar e consultar informações como:

-   usuários cadastrados;
-   produtos;
-   pedidos;
-   registros de atividades;
-   conteúdos da aplicação.

Durante a execução de uma aplicação web, o servidor pode consultar ou modificar dados armazenados no banco de dados. Essas operações normalmente são realizadas por meio de comandos específicos de consulta.

Na disciplina, a integração entre PHP e banco de dados será utilizada para construir aplicações capazes de armazenar e recuperar informações.

### Fluxo de funcionamento de uma aplicação web {.unnumbered}

O funcionamento básico de uma aplicação web pode ser representado pelo seguinte fluxo:

<div class="figure">
<img src="fig/aula2/aula2_fluxo.png" alt="Fluxo de uma página web. Fonte: https://jesielviana.gitbook.io/guiaweb." width="480" />
<p class="caption">(\#fig:fig-produtividade-emprego)Fluxo de uma página web. Fonte: https://jesielviana.gitbook.io/guiaweb.</p>
</div>

Esse processo ocorre de forma muito rápida e é repetido sempre que o usuário realiza alguma interação que exige processamento no servidor.

### Exemplo prático {.unnumbered}

Considere uma aplicação simples de cadastro de usuários.

1.  O usuário acessa uma página com um formulário de cadastro.
2.  O usuário preenche seus dados e envia o formulário.
3.  O navegador envia os dados ao servidor.
4.  O servidor executa um script PHP para processar as informações.
5.  O script PHP grava os dados no banco de dados.
6.  O servidor retorna uma mensagem confirmando o cadastro.
7.  O navegador exibe o resultado ao usuário.

Nesse processo:

-   o **cliente** envia os dados;
-   o **servidor** processa as informações;
-   o **banco de dados** armazena os registros.

### Papel do PHP nesse processo {.unnumbered}

Dentro da arquitetura de uma aplicação web, o PHP atua como intermediário entre o cliente e o banco de dados. Ele recebe as requisições do usuário, aplica a lógica da aplicação e gera o conteúdo que será exibido no navegador.

Ao longo desta disciplina, serão explorados diferentes aspectos dessa interação, incluindo:

-   criação de páginas dinâmicas em PHP;
-   processamento de formulários enviados pelo usuário;
-   organização da aplicação utilizando o padrão MVC;
-   integração com bancos de dados para armazenamento e consulta de informações.

Compreender esse fluxo é essencial para entender como aplicações web são construídas e como diferentes tecnologias trabalham juntas para entregar funcionalidades ao usuário.

## O papel do PHP no desenvolvimento web

Quando utilizamos apenas HTML, CSS e JavaScript, o navegador apenas exibe informações previamente definidas.

Com o PHP, o servidor pode:

-   processar dados enviados por formulários
-   acessar bancos de dados
-   gerar páginas dinamicamente
-   autenticar usuários
-   manipular arquivos
-   integrar APIs

O fluxo simplificado de uma aplicação PHP é:

```         

Navegador → Servidor Web → Script PHP → HTML gerado → Navegador
```

O navegador **nunca recebe o código PHP**, apenas o resultado gerado por ele.

------------------------------------------------------------------------

## PHP embutido em HTML

Uma característica importante do PHP é a possibilidade de inserir código PHP diretamente dentro de páginas HTML.

Exemplo:

``` php
<!DOCTYPE html>
<html>
<head>
<title>Exemplo PHP</title>
</head>

<body>

<?php
echo "Olá, eu sou um script PHP!";
?>

</body>
</html>
```

Neste exemplo:

-   HTML define a estrutura da página
-   PHP gera conteúdo dinamicamente

------------------------------------------------------------------------

## Onde o PHP pode ser utilizado

O PHP pode ser usado em três contextos principais:

### Scripts executados no servidor (Server-side) {.unnumbered}

Este é o uso mais comum do PHP.

Neste caso o servidor executa o código e envia o resultado ao navegador.

### Scripts de linha de comando {.unnumbered}

O PHP também pode ser executado diretamente no terminal:

```         
php script.php
```

Esse tipo de uso é comum para:

-   rotinas automáticas
-   processamento de arquivos
-   tarefas agendadas (cron jobs)

### Aplicações desktop {.unnumbered}

Embora não seja o uso mais comum, é possível desenvolver aplicações desktop com PHP utilizando bibliotecas como **PHP-GTK**.

------------------------------------------------------------------------

## Ambiente de execução

Para executar código PHP é necessário um **servidor web** com o interpretador PHP instalado.

Uma solução comum para ambientes de desenvolvimento é o **XAMPP**, que inclui:

-   Apache (servidor web)
-   PHP
-   MySQL/MariaDB
-   ferramentas administrativas

O procedimento básico para executar um script PHP é:

1.  iniciar o XAMPP
2.  iniciar o servidor Apache
3.  colocar os arquivos PHP na pasta:

```         
xampp/htdocs
```

4.  acessar o arquivo pelo navegador:

```         
http://localhost/pasta/arquivo.php
```

Diferentemente do HTML, o arquivo **não deve ser aberto diretamente no navegador**, pois precisa ser processado pelo servidor.

------------------------------------------------------------------------

## Estrutura básica de um script PHP

Todo código PHP deve estar dentro das tags especiais:

``` php
<?php

// código PHP

?>
```

Exemplo simples:

``` php
<?php
echo "Olá mundo!";
?>
```

------------------------------------------------------------------------

## Variáveis em PHP

Variáveis são usadas para armazenar informações na memória durante a execução do programa.

Em PHP:

-   todas as variáveis começam com `$`
-   não é necessário declarar o tipo da variável

Exemplo:

``` php
$nome = "Maria";
$idade = 20;
```

PHP é considerado uma linguagem **fracamente tipada**, pois o tipo da variável é determinado automaticamente.

------------------------------------------------------------------------

## Tipos de dados básicos

Alguns tipos de dados comuns em PHP incluem:

| Tipo    | Exemplo           |
|---------|-------------------|
| String  | "Olá mundo"       |
| Integer | 10                |
| Float   | 10.5              |
| Boolean | true ou false     |
| Array   | lista de valores  |
| Null    | ausência de valor |

Exemplo:

``` php
$nome = "Ana";
$idade = 25;
$altura = 1.70;
$ativo = true;
```

------------------------------------------------------------------------

## Descobrindo o tipo de uma variável

Podemos utilizar funções da linguagem para identificar o tipo de uma variável.

Exemplo:

``` php
echo gettype($nome);
```

Essa função retorna o tipo da variável em tempo de execução.

------------------------------------------------------------------------

## Exibindo informações na tela

O comando mais utilizado para imprimir dados em PHP é:

```         
echo
```

Exemplo:

``` php
echo "Olá mundo";
```

Também podemos exibir variáveis:

``` php
$nome = "Carlos";
echo $nome;
```

------------------------------------------------------------------------

## Concatenação de strings

Para juntar textos e variáveis utilizamos o operador `.`

Exemplo:

``` php
echo "Olá " . $nome;
```

Outra forma é utilizar aspas duplas:

``` php
echo "Olá $nome";
```

Exemplo completo:

``` php
$nome = "Carlos";
$idade = 30;

echo "Olá $nome, sua idade é $idade";
```

------------------------------------------------------------------------

## Comentários no código

Comentários são utilizados para documentar o código e facilitar sua compreensão.

Comentário de uma linha:

``` php
// comentário
```

ou

``` php
# comentário
```

Comentário de múltiplas linhas:

``` php
/*
comentário
em várias linhas
*/
```

------------------------------------------------------------------------

## Operadores matemáticos

PHP possui operadores matemáticos semelhantes aos utilizados em outras linguagens.

| Operador | Descrição        |
|----------|------------------|
| \+       | soma             |
| \-       | subtração        |
| \*       | multiplicação    |
| /        | divisão          |
| \%       | resto da divisão |
| \*\*     | potenciação      |

Exemplo:

``` php
$a = 10;
$b = 5;

echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
```

------------------------------------------------------------------------

## Exemplos de operações

Soma:

``` php
$soma = 2 + 2;
echo "Resultado: $soma";
```

Divisão:

``` php
$divisao = 5 / 2;
echo $divisao;
```

Potência:

``` php
$potencia = 3 ** 2;
echo $potencia;
```

Resto da divisão:

``` php
$resto = 10 % 3;
echo $resto;
```

------------------------------------------------------------------------

## Comparação com outras linguagens

| Conceito     | C / Java  | PHP     |
|--------------|-----------|---------|
| variável     | int idade | \$idade |
| imprimir     | printf    | echo    |
| concatenação | \+        | .       |

------------------------------------------------------------------------

## Boas práticas iniciais

Algumas recomendações importantes ao programar em PHP:

-   utilizar nomes de variáveis descritivos
-   manter o código bem indentado
-   comentar trechos importantes
-   separar lógica de apresentação sempre que possível

------------------------------------------------------------------------

## Recebendo dados do usuário em PHP

Uma das principais funcionalidades do PHP em aplicações web é **receber e processar dados enviados pelo usuário**, normalmente por meio de **formulários HTML**.

Quando um usuário preenche um formulário e clica em um botão de envio, o navegador envia essas informações para o servidor. O PHP então recebe esses dados e pode utilizá-los para realizar cálculos, armazenar informações ou gerar respostas dinâmicas.

### Criando um formulário HTML {.unnumbered}

O envio de dados geralmente começa com um formulário HTML.

Exemplo:

``` html
<form method="post" action="processa.php">

Nome:
<input type="text" name="nome">

Idade:
<input type="number" name="idade">

<button type="submit">Enviar</button>

</form>
```

Elementos importantes do formulário:

-   `method` define o método de envio dos dados (`GET` ou `POST`)
-   `action` define qual arquivo PHP irá receber os dados
-   `name` identifica cada campo enviado ao servidor

### Recebendo dados no PHP {.unnumbered}

No arquivo indicado no `action` do formulário (`processa.php`, por exemplo), os dados podem ser acessados utilizando **variáveis superglobais** do PHP.

As mais utilizadas são:

-   `$_POST` → recebe dados enviados pelo método POST
-   `$_GET` → recebe dados enviados pela URL

Exemplo de processamento:

``` php
<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

echo "Nome: $nome <br>";
echo "Idade: $idade";

?>
```

Neste exemplo:

-   o PHP acessa o valor do campo `nome`
-   o PHP acessa o valor do campo `idade`
-   os valores são exibidos na página

### Exemplo completo {.unnumbered}

Arquivo `index.html`:

``` html
<form method="post" action="dados.php">

Nome:
<input type="text" name="nome">

Idade:
<input type="number" name="idade">

<button type="submit">Enviar</button>

</form>
```

Arquivo `dados.php`:

``` php
<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

echo "Olá $nome <br>";
echo "Sua idade é $idade";

?>
```

Quando o usuário envia o formulário:

1.  o navegador envia os dados ao servidor
2.  o PHP recebe os dados
3.  o PHP executa o script
4.  o resultado é exibido na página

### Validação básica {.unnumbered}

Antes de utilizar os dados recebidos, é importante verificar se os campos foram realmente preenchidos.

Exemplo simples:

``` php
<?php

if (empty($_POST['nome']) || empty($_POST['idade'])) {
    echo "Todos os campos devem ser preenchidos.";
} else {

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    echo "Nome: $nome <br>";
    echo "Idade: $idade";
}

?>
```

Essa verificação evita erros quando o usuário envia o formulário com campos vazios.

## Exercícios

Desenvolva os seguintes exercícios utilizando PHP.

1.  Construir um algoritmo que leia dois números e efetue a soma.

-   Se o resultado da soma for maior que 10, apresentar o valor somado a 8.
-   Caso contrário, apresentar o valor subtraído de 5.

2.  Ler três números diferentes e exibi-los em **ordem decrescente**.
3.  Ler:

-   nome
-   gênero
-   idade Se a idade for maior que 25, imprimir:

```         
Nome: ...
Gênero: ...
Você pode se cadastrar
```

Caso contrário:

```         
Nome: ...
Gênero: ...
Você não pode se cadastrar
```

4.  Ler um número inteiro entre **1 e 12** e exibir o mês correspondente.

Exemplo:

```         
1 → Janeiro
2 → Fevereiro
...
```

Caso o número esteja fora do intervalo, informar que não existe mês correspondente.

------------------------------------------------------------------------

## Leituras recomendadas

BENTO, Evaldo. Desenvolvimento Web com PHP e MySQL.

SARAIVA, Maurício; BARRETO, Jeanine. Desenvolvimento de Sistemas com PHP.

Manual oficial da linguagem:

<https://www.php.net/manual/pt_BR>

<!--chapter:end:02-cross-refs.Rmd-->


# References {-}


<!--chapter:end:07-references.Rmd-->

