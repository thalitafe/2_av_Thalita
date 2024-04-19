<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <div>
    <?php
    $cotação = 5.19;
    $real = $_GET["numero"];
    $dolar = $real / $cotação;
    echo "Voçê informou R$". number_format($real,2,",",".")."<br/>";
    echo "Esse valor em dolar equivale a :UU$ ". number_format($dolar,2,",",".")."<br/>";
    echo "A cotaçãode hoje é de R$". number_format($cotação,2,",",".");
    
    
    ?>
    </div>
</body>
</html>