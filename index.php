<?php
    $text = "Il pene è l'organo sessuale maschile. I bambini, gli uomini e gli animali di sesso maschile, tutti hanno il pene. I bambini e i ragazzi spesso ridacchiano alla parola 'pene', ma è solo una parte del corpo, come dire 'braccio' o 'gamba'. Beh, diciamo che il pene è solo un po' più particolare, poiché è l'organo che gli uomini usano per il sesso e per la pipì. Alcuni uomini hanno molto a cuore questa parte del loro corpo, e ne provano orgoglio o vergogna, a seconda di alcuni parametri che ritengono fondamentali, quali la lunghezza e il diametro.";

    $badword = $_GET["word"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php badwords</title>
</head>
<body>
    <h2>Testo originale</h2>
    <p><?php echo $text ?></p>
    <h2>Testo censurato</h2>
    <p><?php echo str_replace("pene", $badword, $text) ?></p>
</body>
</html>