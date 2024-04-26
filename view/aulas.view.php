<?php
    include "../class/Bd.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style\style.css">
    <title>Aulas</title>
</head>
<body>
    <br>
    <section>
        <h1>Bem Vindo ao Brant's EAD</h1>
        <a href="inserir.view.php"><button>Adicionar Nova Aula</button></a>
        <h1>Lista de Aulas</h1>
        <?php
            foreach(Bd::listar() as $aula) {
                echo "<p>".$aula->getNome()."</p>";
                echo "<iframe width='560' height='315' src='".$aula->getLink()."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>";
            }
        ?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>