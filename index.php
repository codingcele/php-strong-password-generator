<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>
    <style>
        *{
            font-family: Verdana;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <?php
        require_once __DIR__ . "/helper.php";

        $length = $_GET['length'] ?? false;

        $pass = pass_generator($length);
    ?> 
</head>

<body>
    <form action="">
        <label for="psw_length">Lunghezza password:</label>
        <input type="number" min="1" name="length"
            <?php
                if ($length) {
                    echo "value='" . $length . "'";
                }
            ?>
        >
        <input type="submit" value="GENERATE">
    </form>

    <h1>Your new password is: <?php echo $pass ?> </h1>
    

</body>
</html>