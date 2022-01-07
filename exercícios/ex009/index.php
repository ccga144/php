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
    $ano = $_GET['ano'];
    $idade = date('Y') - $ano;
    $tipo = ($idade>17 || $idade<65) ? "OBRIGATÓRIO" : "OPCIONAL";
    $tipo = $idade < 16 ? "NÃO VOTA" : $tipo;
    echo "Quem nasceu em $ano tem $idade anos e o voto é: $tipo";
?>
</div>
</body>
</html>