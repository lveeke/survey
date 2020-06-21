<!DOCTYPE html>

<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vragenlijst Vrouwenklinieken</title>
    <link href="css/basic.css" media="screen" rel="stylesheet">
    <link href="css/screen.css" media="screen" rel="stylesheet">
</head>
<body>
<?php
if('POST' === $_SERVER['REQUEST_METHOD']):
    $mailText = var_export($_POST, true);
    mail('mail@lindeveeke.nl', 'Form Response', $mailText, 'Content-Type: text/plain; charset=utf-8');
?>
<h1>De vragenlijst is ingevuld!</h1>
<p>
Prettige dag.
</p>
<?php else: ?>
<h1>Vragenlijst x</h1>
<p>In deze vragenlijst wordt... Velden met een <span class="req">*</span> zijn verplicht.</p>
<form method="post">
    <fieldset>
        /* hier kun je beginnen met de vragenlijst */   
    </fieldset>
    <fieldset>
        <button type="submit">Verstuur</button>
    </fieldset>
</form>
<?php endif; ?>
</body>
</html>
