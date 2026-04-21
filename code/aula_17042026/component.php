<?php
function load_body($name){
    if($name === "Formulário de Cadastro"){
        return '<p class="text-muted">
                Preencha os dados abaixo. O formulário será utilizado para demonstrar validação em PHP.
            </p>

            <form method="post" action="resposta.php">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="">
                    <div class="text-danger small"></div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="">
                    <div class="text-danger small"></div>
                </div>
                <div class="mb-3">
                    <label for="idade" class="form-label">Idade</label>
                    <input type="number" class="form-control" id="idade" name="idade" value="" min=0>
                    <div class="text-danger small"></div>
                </div>
                <div class="mb-3">
                    <label for="curso" class="form-label">Curso</label>
                    <select name="curso" id="curso" class="form-select">
                        <option value="">Selecione...</option>
                        <option value="ADS">Análise e Desenvolvimento de Sistemas</option>
                        <option value="BES">Engenharia de Software</option>
                        <option value="BCC">Ciência da Computação</option>
                    </select>
                    <div class="text-danger small"></div>
                </div>
            <button type="submit" class="btn btn-success">Enviar cadastro</button>
            </form>';
    }elseif($name === "Dados cadastrais"){
        // Validar se a página foi carregada via POST
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            foreach($_POST as $key => $value){
                if($key === "nome"){
                    $nome = htmlspecialchars($_POST["nome"]); // previne HTML
                    if(empty($nome)){
                        echo "<p>O campo nome deve ser preenchido!!</p>";
                    }else{
                        echo "<p> $key: $value </p>";
                    }
                }elseif($key === "email"){
                    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                    if(empty($email)){
                        echo "<p>O campo email deve ser preenchido!!</p>";
                    }else{
                        echo "<p> $key: $value </p>";
                    }  
                }elseif($key === "idade"){
                    $idade = filter_input(INPUT_POST, $key, FILTER_VALIDATE_INT);
                    if(!empty($idade) && $idade > 0 && $idade <= 110){
                        echo "<p> $key: $idade </p>";
                    }else{
                        echo "<p> O campo idade deve ser preenchido, com um valor 
                        numérico entre 1 e 110 </p>";
                    }
                }elseif($key === "curso"){
                    if(empty($value)){
                        echo "<p>Selecione um curso válido!</p>";
                    }elseif($value === "BES" || $value === "BCC" || $value === "ADS"){
                        echo "<p>$key: $value </p>";
                    }
                }
            }
        }
    }

}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro acadêmico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Sistema Acadêmico</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Cadastro</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Consultas</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Relatórios</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h1 class="h4 mb-0"> <?php echo $page_name?></h1>
        </div>

        <div class="card-body">
            <?php echo load_body($page_name);?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>