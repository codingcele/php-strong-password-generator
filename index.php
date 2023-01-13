<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>
</head>

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

<body>
    <form action="">
        <label for="psw_length">Lunghezza password:</label>
        <input type="number" min="1" name="length">
        <input type="submit" value="GENERATE">
    </form>

    <?php
        $length = $_GET['length'] ?? false;

        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = '';
            
        while (strlen($pass) < $length) {
            $char = substr($alphabet, rand(0, strlen($alphabet)), 1);
            $pass .= $char;
        }

        echo $pass;

    ?>

</body>
</html>