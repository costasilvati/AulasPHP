# Atividade Prática – Revisão de HTML, CSS (Bootstrap) e JavaScript
## 06/03/2026 - Prof. Juliana Costa Silva

Atividade prática de aula.


## Objetivo

Nesta atividade você deverá desenvolver uma página web contendo um formulário interativo utilizando **HTML**, **Bootstrap** e **JavaScript**.

A atividade tem como objetivo revisar conceitos fundamentais utilizados no desenvolvimento web antes de iniciarmos o uso de **PHP no lado servidor**.

O foco da atividade é:

- Estruturação correta de páginas HTML
- Uso de componentes do Bootstrap
- Manipulação de eventos com JavaScript
- Validação de dados de formulários
- Manipulação básica do DOM

---

# Contexto da atividade

Você deverá desenvolver uma página web com um **formulário relacionado a um tema pessoal**.

O tema deve ser **algo que represente seus interesses pessoais**, como por exemplo:

- um hobby
- rotina de estudos
- interesses profissionais
- planejamento de viagem
- atividades físicas
- jogos favoritos
- coleção ou interesse cultural

Cada aluno deverá escolher **um tema próprio**.

---

# Estrutura do projeto

Crie uma pasta para seu projeto contendo os seguintes arquivos:

```

/atividade1
index.html
script.js
style.css (opcional)

```

Todos os arquivos devem funcionar localmente no navegador.

---

# Parte 1 – Estrutura da página

Desenvolva uma página chamada **index.html** contendo:

- título da página
- cabeçalho com nome do projeto
- formulário principal
- botão de ação
- área para exibição de resultado

A página deve utilizar **Bootstrap** para organização visual.

Utilize pelo menos os seguintes elementos:

- container
- row
- col
- form-control
- form-select
- botão estilizado

---

# Parte 2 – Formulário

O formulário deve conter **pelo menos seis campos de entrada**.

Exemplos de campos possíveis:

- Nome
- Cidade
- Idade
- Tema escolhido
- Nível de experiência
- Tempo dedicado à atividade
- Descrição da atividade
- Preferências relacionadas ao tema

Você pode usar diferentes tipos de campo:

- text
- number
- select
- textarea
- checkbox
- radio

---

# Parte 3 – Estilização

Utilize **Bootstrap** para estruturar e estilizar a página.

É permitido adicionar personalizações utilizando CSS próprio.

Exemplos de personalização:

- cores
- bordas
- espaçamento
- cards
- layout centralizado

---

# Parte 4 – Interações com JavaScript

Utilize **JavaScript** para criar interações no formulário.

Implemente pelo menos algumas das seguintes funcionalidades:

- validação de campos obrigatórios
- validação de valores numéricos
- exibição de mensagem caso o formulário esteja incompleto
- contador de caracteres em campos de texto
- exibição ou ocultação de campos dependendo da escolha do usuário
- geração de um resumo das informações preenchidas

---

# Exemplo de comportamento esperado

Ao clicar no botão principal da página, o sistema pode gerar um resumo das informações digitadas.

Exemplo de saída exibida na página:

```

Olá João!

Seu principal hobby é Fotografia.
Você pratica essa atividade há 3 anos.
Costuma dedicar cerca de 5 horas por semana.

```

A mensagem deve ser gerada utilizando **JavaScript e manipulação do DOM**.

---

# Organização do código

Organize seu projeto separando responsabilidades:

HTML  
estrutura da página

CSS  
estilização visual

JavaScript  
lógica e interações

Utilize nomes claros para variáveis, funções e identificadores.

---

# Recomendações

- teste seu código diretamente no navegador
- verifique se todos os campos funcionam corretamente
- utilize o console do navegador para depuração
- mantenha o código organizado e indentado
- utilize comentários quando necessário

---

# Entrega

Envie o link para a pasta do seu repositório github, commit válido até as 21:50 de hoje 06/03/2026.


Conteúdo:

```

index.html
script.js
style.css (se houver)

```

---

# Observações

Esta atividade deve ser desenvolvida **individualmente**.

Cada projeto deverá possuir **tema próprio e conteúdo original**.

---



# Desafios Extras (Opcional)

Os desafios abaixo são opcionais e destinados aos alunos que desejam explorar recursos adicionais de **JavaScript**, **HTML** e **Bootstrap**.

Cada desafio acrescenta funcionalidades mais avançadas ao formulário desenvolvido.

---

# Desafio 1 – Preview de imagem

Adicione ao formulário um campo para envio de imagem relacionado ao tema escolhido.

Exemplo  
foto do hobby  
imagem de viagem  
imagem de projeto pessoal

Ao selecionar a imagem, ela deve ser exibida automaticamente na página antes do envio do formulário.

Sugestão técnica

- utilizar `input type="file"`
- usar `FileReader` ou `URL.createObjectURL`
- atualizar um elemento `<img>` na página

---

# Desafio 2 – Contador de caracteres

Implemente um contador de caracteres em um campo `textarea`.

O contador deve atualizar automaticamente conforme o usuário digita.

Exemplo de exibição

```

120 / 200 caracteres

```

Sugestão técnica

- evento `input`
- propriedade `value.length`

---

# Desafio 3 – Campos dinâmicos

Exiba campos adicionais dependendo da escolha do usuário.

Exemplo

Se o usuário selecionar:

```

Hobby: Fotografia

```

exibir campos adicionais como:

- tipo de câmera
- tipo de fotografia
- tempo de experiência

Sugestão técnica

- evento `change`
- alterar propriedades `display` ou classes do Bootstrap

---

# Desafio 4 – Geração de cartão de perfil

Após preencher o formulário e clicar no botão principal, gerar automaticamente um **card Bootstrap** com o resumo das informações.

O card pode conter:

- nome
- descrição
- dados escolhidos
- imagem (se houver)

Sugestão técnica

- criar elementos dinamicamente com JavaScript
- inserir conteúdo utilizando `innerHTML` ou `appendChild`

---

# Desafio 5 – Tema claro e escuro

Implemente um botão que permita alternar entre **modo claro** e **modo escuro** da página.

Sugestão técnica

- alternar classes CSS no elemento `body`
- utilizar `classList.toggle()`

---

# Desafio 6 – Armazenamento no navegador

Armazene os dados preenchidos no formulário no navegador utilizando **LocalStorage**.

Quando a página for aberta novamente, os dados devem ser recuperados automaticamente.

Sugestão técnica

- `localStorage.setItem()`
- `localStorage.getItem()`
- converter objetos usando `JSON.stringify()` e `JSON.parse()`

---

# Desafio 7 – Barra de progresso do formulário

Crie uma barra de progresso que indique quantos campos do formulário já foram preenchidos.

Exemplo

```

Progresso do formulário
████████░░░░ 60%

```

Sugestão técnica

- contar campos preenchidos
- atualizar largura de uma `progress bar` do Bootstrap
```

---
