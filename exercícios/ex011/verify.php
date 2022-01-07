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
    echo "Você nasceu em $ano e tem $idade";
    $votar = 'não pode votar';
    $dirigir = 'não pode dirigir';
    if ($idade > 65){
        $votar = 'pode votar <strong>opcionalmente</strong>';
        $dirigir = 'pode dirigir';
    } elseif ($idade >= 16){
        $votar = 'pode votar <strong>opcionalmente</strong>';
    } elseif ($idade >= 18) {
        $votar = 'já pode votar'; 
        $dirigir = 'já pode dirigir';
    }
    echo "<br> Com essa idade, você $votar e $dirigir";
?>
</div>
</body>
</html>