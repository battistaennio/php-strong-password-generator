<?php
// Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
// Scriviamo tutto (logica e layout) in un unico file index.php

include __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>strong password generator</h1>
        <h2>Genera una password sicura</h2>

        <div id="form-container">
            <form action="index.php" method="GET">
                <div class="box">
                    <label for="pw">Lunghezza password:</label>
                    <input type="number" name="pw-length" id="pw">
                </div>
                <div class="box">
                    <button id="send" class="btn" type="submit">Genera</button>
                    <button id="reset" class="btn" type="reset">Annulla</button>
                </div>
            </form>

            <div id="result">
                <p><?php echo $password; ?></p>
            </div>
        </div>
    </div>
</body>
</html>
