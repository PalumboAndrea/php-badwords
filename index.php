<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1>Inserisci qui una frase!</h1>

    <form action="data.php" method="POST">
        <input type="text" name="phrase" placeholder="Inserisci una frase">
        <input type="text" name="censured" placeholder="Parola da censurare">
        <button type="submit">Invia</button>


    </form>
</body>
</html>