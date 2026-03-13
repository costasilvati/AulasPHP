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
