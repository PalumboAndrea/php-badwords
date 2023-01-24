<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        Hai scritto: <?php echo ucfirst($_POST['phrase']); ?>
    </h1>

    <h3>
        La lughezza è <?php echo strlen($_POST['phrase']) - substr_count($_POST['phrase'], ' ');?> lettere
    </h3>

    <h1>
        La parola da censurare è: <?php echo ucfirst($_POST['censured']); ?>
    </h1>

    <h2>
        La nuova frase è: 
        <?php echo $newPhrase = ucfirst(str_replace($_POST['censured'], '***', $_POST['phrase'])); ?>
    </h2>

    <h3>
        La nuova lughezza è <?php echo strlen($newPhrase) - substr_count($newPhrase, ' '); ?> lettere
    </h3>
    
</body>
</html>

