<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        session_start();

        $psw = $_SESSION["password"];
    ?>
</head>
<body>
    <h1>
        La tua nuova password è: 
        <?php 
            echo $psw
        ?>
    </h1>
</body>
</html>