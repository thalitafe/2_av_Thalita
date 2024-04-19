<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <div>
        <?php
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $nota3 = $_GET["nota3"];
        $nota4 = $_GET["nota4"];
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        if ($media >= 7) {
            echo "Aluno :  Aprovado.<br/>";
            echo "A media é :". number_format($media,2);
        }
        elseif ($media >= 5 and $media <= 6) {
            echo "Aluno de recuperação.<br/>";
            echo "A media do aluno é :". number_format($media,2);
        }
        else {
            echo "Aluno: Reprovado.<br/>";
            echo "A média do aluno é :". number_format($media,2);
        }




        
        
        ?>
    </div>
    
</body>
</html>