<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicío 2</title>
</head>
<body>
    <div>
        <?php
            $nome = $_GET["nome"];
            $Ano_nasc = $_GET["Ano_nasc"];
            $idade = date("Y") - $Ano_nasc;
            if ($idade <= 11) {
                $status = "Criança";
            }
            elseif ($idade >= 12 and $idade <= 14) {
                $status = "Adolescente";
            }
            elseif ($idade >= 15 and $idade <=18) {
                $status = "Jovem";
            }
            elseif ($idade >= 19 and $idade <= 65) {
                $status = "Adulto";
            }
            else {
                $status = "Idoso";
            }
            echo "Nome: $nome"."<br/>";
            echo "Sua idade é : $idade anos";


        
        ?>
    </div>
    
</body>
</html>