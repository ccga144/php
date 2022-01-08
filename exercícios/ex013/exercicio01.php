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
    if ($_GET['operation'] == false && $_GET['num'] == false){
        echo "<span class=vermelho-destaque>VOCÊ NÃO SELECIONOU UM DOS CAMPOS</span>";
    } else{
        $operation = $_GET['operation'];
        $num = $_GET['num'];
        switch ($operation){
        case 0:
            $num = $num * 2;
            break;
        case 1:
            $num = $num ^ 3;
            break;
        case 2: 
            $num = sqrt($num);
            break;
    }
    echo "Fazendo a operação selecionada, o resultado do cálculo é $num";
    }
    
?>
</div>
</body>
</html>