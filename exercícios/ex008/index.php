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
    $sit = $md>=7? "aprovação" : "recuperação";
    $sit = $md>10? ": ATENÇÃO: A sua nota foi maior que 10, então um bug aconteceu. Entre em contato com seu professor da matéria" : $sit; 
    echo "A sua média foi $md e você está em $sit"
?>
</div>
</body>
</html>