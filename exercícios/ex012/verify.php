<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
<?php 
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $md = ($n1 + $n2) / 2;
    if ($md < 5){
        $sit = 'REPROVAÇÃO';
    } elseif ($md >= 5 && $md < 7){
        $sit = 'RECUPERAÇÃO';
    } else {
        $sit = 'APROVAÇÃO';
    }
    echo "A média entre <strong>$n1</strong> e <strong>$n2</strong> é igual a <strong>$md</strong> <br> Situação do aluno: <strong>$sit</strong>";
?>
</div>
</body>
</html>