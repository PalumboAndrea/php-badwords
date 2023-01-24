
<h1>
    Hai scritto: <?php echo ucfirst($_POST['phrase']); ?>
</h1>

<h3>
    La lughezza è <?php echo strlen($_POST['phrase']); ?> lettere;
</h3>


<h1>
    La parola da censurare è: <?php echo ucfirst($_POST['censured']); ?>
</h1>

<h2>
    La nuova frase è: 
    <?php echo $newPhrase = (str_replace($_POST['censured'], '***', $_POST['phrase'])); ?>
</h2>

<h3>
    La nuova lughezza è <?php echo strlen($newPhrase); ?> lettere;
</h3>



