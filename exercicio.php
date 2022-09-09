<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/exercicio.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <title>PHP Course</title>
</head>

<body class="exercicio">
    <header>
        <h1><a href="index.php">PHP Course</a></h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main>
        <div class="content">
            <?php
            include("{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
    <footer>
        <h3>Genesis Technology © <?= date('Y') ?></h3>
    </footer>
</body>

</html>