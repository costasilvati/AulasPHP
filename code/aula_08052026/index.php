<?php
$nomeArquivo = "exemplo.txt";

$conArquivo = fopen($nomeArquivo,"r");
// Verificando se arquivo foi aberto corretamente
if($conArquivo){
    echo "Arquivo encontrado!!";
    while(!feof($conArquivo)){
        $linha = fgets($conArquivo); // recebe uma linha do arquivo
        echo "<p>$linha</p>";
    }
    fclose($conArquivo);
}else{
    echo "<p>Erro ao abrir o arquivo! </p>";
}
?>