<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Màquina d'Escriure</title>
</head>
<body>
    <h1>Màquina d'Escriure</h1>
    <form>
        <?php
        session_start();
        if (!isset($_SESSION['letras']) || isset($_GET['borrar'])) {
            $_SESSION['letras'] = '';
        }elseif (isset($_GET['lletra'])) {
            $_SESSION['letras'].= $_GET['lletra'];
        }
        echo "<p>".$_SESSION['letras']."</p>";
        foreach (range('A', 'Z') as $lletra){
            echo "<a href='?lletra=$lletra'>$lletra </a>";
        }
        echo "<a href='?lletra=&nbsp;'>Espacio</a>";
        echo "<a href='?borrar=true'>Borrar</a>";
        ?>
    </form>
</body>
</html>
