<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
       $Nome = $_GET["Nome"];
       $SobreNome = $_GET["Sobrenome"];
        echo "<p>É um prazer te conhecer, <strong>$Nome $SobreNome</strong>! Este é o meu site!";
        ?>
        <p><a href="/cursophp/ex006/">Voltar para página anterior</a></p>
    </main>
</body>
</html>