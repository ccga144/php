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
    $nota = $_GET['nota'];
    $sit = $nota>=7? "aprovação" : "recuperação";
    $sit = $nota>10? ": ATENÇÃO: A sua nota foi maior que 10, então um bug aconteceu. Entre em contato com seu professor da matéria" : $sit; 
    echo "A sua nota foi $nota, então você está em $sit"
?>
</div>
</body>
</html>