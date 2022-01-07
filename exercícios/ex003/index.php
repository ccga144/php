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
            $preco = $_GET['p'];
            echo "Preço original: R$ $preco";
            $preco += $preco *10/100;
            echo "<br> O preço com aumento é: R$ " . number_format($preco, 2);
        ?>
    </div>
</body>
</html>