<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 3</title>
</head>
<body>
    <h1>ENDEVINA EL NOMBRE</h1>
        <?php
            session_start();
            function formulari() {
                echo "<form method='POST'>";
                echo "<input type='number' name='endevina'>";
                echo "<input type='submit' value='ENDEVINA'>";
                echo "</form>";
            }

            if (!isset($_POST['endevina'])) {
                formulari();
            } else {
                $_SESSION['intents']++;
                $_SESSION['historial'][] = $_POST['endevina'];
                if ($_POST['endevina']===$_SESSION['ocult']) {
                    echo "<h2>Felicitats! :)</h2>";
                    echo "<p><strong>Intents: </strong>". $_SESSION['intents']. "</p>";
                    echo "<p><strong>Historial: </strong>". implode(', ', $_SESSION['historial']). "</p>";
                    echo "<a href='ex41pagina1.php'>TORNAR A L'INICI</a>";
                } elseif ($_POST['endevina']<$_SESSION['ocult']) {
                    echo "<h3>El numero que esteu buscant es major</h3>";
                    echo "<p><strong>Intents: </strong>". $_SESSION['intents']. "</p>";
                    echo "<p><strong>Historial: </strong>". implode(', ', $_SESSION['historial']). "</p>";
                    formulari();
                } elseif ($_POST['endevina']>$_SESSION['ocult']) {
                    echo "<h3>El numero que esteu buscant es menor</h3>";
                    echo "<p><strong>Intents: </strong>". $_SESSION['intents']. "</p>";
                    echo "<p><strong>Historial: </strong>". implode(', ', $_SESSION['historial']). "</p>";
                    formulari();
                }
            }
        ?>
</body>
</html>
