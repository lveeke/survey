
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
    mail('mail@nozel.org', 'Form Response', $mailText, 'Content-Type: text/plain; charset=utf-8');
?>
<h1>De vragenlijst is ingevuld!</h1>
<p>
Prettige dag.
</p>
<?php else: ?>
<h1>Vragenlijst Linde</h1>
<p>
    In deze vragenlijst wordt... Velden met een <span class="req">*</span> zijn verplicht.
</p>
<h2>Anamnese</h2>
<form method="post">
    <fieldset>
        <label>Kleur</label><br>
        <input type="radio" id="blauw" name="kleur" value="blauw">
        <label for="blauw">Blauw</label><br>
        <input type="radio" id="rood" name="kleur" value="rood">
        <label for="rood">Rood</label><br>
        <input type="radio" id="geel" name="kleur" value="geel">
        <label for="geel">Geel</label><br>
        <label>Naam<span class="req">*</span> <input type="text" name="naam" placeholder="Naam" required></label>
        <label>Telefoonnummer<span class="req">*</span> <input type="tel" name="phone" placeholder="Telefoonnummer" required></label>
        <label>E-mailadres<span class="req">*</span> <input type="email" name="mail" placeholder="Email Address" required></label>
        <label>Favoriete kleur <input type="text" name="Favoriete kleur" placeholder="Favoriete kleur"></label>
        <label>Redenen voor het consult (in volgorde van belangrijkheid):<textarea id="TEXTAREA_ID" name="UNIEKE_NAAM" placeholder="PLACEHOLDER"></label>
        <label>Doel van het consult (wat wilt u bereiken?):<textarea id="TEXTAREA_ID" name="UNIEKE_NAAM" placeholder="PLACEHOLDER"></label>
        <p>Andere artsen of therapeuten waar u onder behandeling bent</P>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="naam"></label>
            <label>2. <input type="text" name="UNIEKE_NAAM" placeholder="praktijk"></label>
            <label>3. <input type="text" name="UNIEKE_NAAM" placeholder="plaats"></label>
        <p>Gebruikt u medicijnen? Zo ja, welke?</P>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="naam medicijn"></label>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="dosering"></label>
        <p>Gebruikt u supplementen? Zo ja, welke?</P>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="naam supplement"></label>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="dosering"></label>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="merk"></label>
        <p>Ziektegeschiedenis (aandoeningen, operaties, opnames etc.): </p>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="periode"></label>
        <p>Specifieke gegevens</p>
            <p>lengte:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="PLACEHOLDER"></label>
            <p>kg</p>
            
    </fieldset>
    <fieldset>
        <label><input type="checkbox" name="keep_me_informed"> Keep me informed!</label>
    </fieldset>
    <fieldset>
        <button type="submit">Verstuur</button>
    </fieldset>
</form>
<?php endif; ?>
</body>
</html>
