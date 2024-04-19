<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicío 4</title>
</head>
<body>
    <div>
        <?php
        $nome = $_GET["nome"];
        $Ano_nasc = date('d/m/Y');
        $profissão = $_GET["Profissão"];
        echo "Nome Completo: $nome "."<br/>";
        echo "Idade: $Ano_nasc "."<br/>";
        echo "Profissão: $profissão ";

        
        ?>
    </div>
    <a href="exe4.html"><button type="submit">Voltar</button></a>
    
</body>
</html>