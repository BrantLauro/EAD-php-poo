<?php
    include "../class/Bd.php";
    include "../class/Functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Nova Aula</title>
</head>
<body>
    <br>
    <section>
        <h1>Inserir Nova Aula</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="titulo">Titulo da Aula</label>
            <input type="text" name="titulo" require>
            <label for="link">Link da Aula</label>
            <input type="text" name="link" require>
            <input type="submit" value="OK">
        </form>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
    <?php
        $nome = strip_tags($_POST['titulo'] ?? "");
        $link = strip_tags($_POST['link'] ?? "");

        if($nome != "" &&  $link != "") {
            $aula = new Aula($nome, $link);
            $res = Bd::inserir($aula);
            if($res)
                Functions::alerta("Inserido com sucesso!");
            else 
                Functions::alerta("Erro ao inserir!");
            Functions::redirect("aulas.view.php");
        }
    ?>
</body>
</html>