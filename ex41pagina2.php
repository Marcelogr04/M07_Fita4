<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <h1>NOMBRE ENREGISTRAT</h1>
    <?php
        session_start();
        $_SESSION['ocult'] = $_POST['ocult'];
        $_SESSION['intents'] = 0;
        $_SESSION['historial'] = array();
    ?>
    <a href="ex41pagina3.php">ENDEVINAR</a>
</body>
</html>
