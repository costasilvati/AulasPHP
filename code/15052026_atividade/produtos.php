
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <table>
        <?php
            $file = 'produtos.txt';
            if(file_exists($file)){
                $handle = fopen($file, "r");
                 while (($dados = fgetcsv($handle, 1000, ',')) !== false ) {
                    echo"<tr>";
                    foreach($dados as $valor){
                        echo"<td>$valor</td>";
                    }
                    }
                    fclose ($handle);
            }else {
                echo "Erro ao abrir o arquivo";
            }
        ?>
    </table>
</body>
</html>