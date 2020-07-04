
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
        <label>Redenen voor het consult (in volgorde van belangrijkheid): <input type="text" name="vul in" placeholder="vul in"></label>
        <label>Doel van de behandeling (wat wilt u bereiken?:) <input type="text" name="vul in" placeholder="vul in"></label>
        <p>Andere artsen of therapeuten waar u onder behandeling bent</P>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="naam"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="praktijk"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="plaats"></label>
            <label>2. <input type="text" name="UNIEKE_NAAM" placeholder="naam"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="praktijk"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="plaats"></label>
            <label>3. <input type="text" name="UNIEKE_NAAM" placeholder="naam"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="praktijk"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="plaats"></label>
        <p>Gebruikt u medicijnen? Zo ja, welke?</P>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="naam medicijn"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="dosering"></label>
            <label>2. <input type="text" name="UNIEKE_NAAM" placeholder="naam medicijn"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="dosering"></label>
            <label>3. <input type="text" name="UNIEKE_NAAM" placeholder="naam medicijn"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="dosering"></label>
        <p>Gebruikt u supplementen? Zo ja, welke?</P>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="naam supplement"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="dosering"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="merk"></label>
            <label>2. <input type="text" name="UNIEKE_NAAM" placeholder="naam supplement"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="dosering"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="merk"></label>
            <label>3. <input type="text" name="UNIEKE_NAAM" placeholder="naam supplement"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="dosering"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="merk"></label>
        <p>Ziektegeschiedenis (aandoeningen, operaties, opnames etc.): </p>
            <label>1. <input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="periode"></label>
            <label>2. <input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="periode"></label>
            <label>3. <input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <label>   <input type="text" name="UNIEKE_NAAM" placeholder="periode"></label>
        <p>Specifieke gegevens</p>
            <label>lengte:<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <label>gewicht<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>kg</p>
            <label>gewichtsverandering in de laatste 5 jaar?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <label>Hebt u ondergewicht?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <label>Hebt u overgewicht?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <label>leeftijd van uw eerste menstruatie:<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>jaar</p>
            <label>menstrueert u nog?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <label>zo nee, leeftijd van uw laatste menstruatie<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>jaar</p>
            <label>zo ja, hoe is uw huidige menstruatiepatroon?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>heeft u PMS klachten, of gehad?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>gebruikt u anticonceptiemiddelen?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>zo ja, welke?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>gebruikt u hormonen van de huisarts of gynaecoloog?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>bent u hierover tevreden?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>hebt u uw baarmoeder nog?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>zo niet, in welk jaar is deze verwijderd?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>waarom is deze verwijderd?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>hebt u beide eierstokken nog?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>lezo niet, in welk jaar zijn een of beide eierstokken verwijderd?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>waarom zijn deze verwijderd?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>hebt u uw galblaas nog?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>zo niet, in welk jaar is deze verwijderd:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>waarom is deze verwijderd?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>bent u behandeld of onder behandeling voor borstkanker?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>hebt u weleens trombose gehad? Zo ja, waardoor?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>hebt u hart- en vaatziekte?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>hebt u rheuma of fibromyalgie?:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
            <p>lengte:</p>
            <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
            <p>cm</p>
<h2>Risicoanalyse</h2>
    <label>komt er in de familie trombose voor?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>komt er in de familie osteoporose voor?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>zo ja, bij welk familielid?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>Heeft u lang corticosteroïden gebruikt? (bv. Prednison):<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>Bent u 50 jaar of ouder?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hebt u vanaf uw 50e jaar botbreuken gehad?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>Bent u kleiner geworden?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>Hoeveel uur beweegt u actief per week?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>komt u regelmatig in de zon/daglicht?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>gebruikt u kalmering- en/of slaaptabletten?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>Komt er in de familie hart- en vaatziekte voor voor het 60e jaar?: <input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>zo ja, bij welk familielid?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>rookt u?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoeveel glazen alcohol drinkt u per week?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>beweegt u te weinig?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>heeft u veel stress?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>heeft u een hoge bloeddruk?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>heeft u een hoog cholesterolgehalte?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>heeft u zwangerschapscomplicaties gehad? Bijv. HELLP syndroom, placentaloslating, te kleine baby's:     <input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>komt er in de familie borstkanker voor?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>zo ja, bij welk familielid?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <<label>heeft u kinderen?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoe oud was u toen u de kinderen kreeg??<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>komt er in de familie eierstokkanker voor?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>zo ja, bij welk familielid?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
<h2>Voedingsanamnese</h2>
    <label>gebruikt u dagelijks melk?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>welke andere zuivelproducten?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>eet u veel vette vis? Dat is haring, zalm, tonijn, makreel, paling e.d:<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>eet u vlees? zo ja, hoeveel?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>gebruikt u sojaproducten?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>drinkt u veel frisdrank met koolzuur?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>drinkt u cola? zo ja, hoeveel?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoeveel koffie drinkt u per dag?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoeveel zwarte thee drinkt u per dag?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>eet u vaak gekruid eten?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoeveel groente eet u per dag?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoeveel fruit eet u per dag?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoeveel brood eet u per dag?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoeveel eieren eet u per week?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>Welke vetten gebruikt u? (roomboter, olijfolie, margarine, halvarine etc): <input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoeveel fruit eet u per dag?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
<h2>Historie</h2>
    <label>Specifieke problemen in de prenatale fase t/m eerste twee jaar van het leven: <input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoe heeft u uw jeugd ervaren?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>welke kinderziektes heeft u doorgemaakt?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>waarvoor bent u gevaccineert?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>ziekenhuisopnamen<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>ernstige aandoeningen of in het buitenland opgelopen ziekte?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>heeft u veel stress? zo ja, waardoor?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>bent u in aanraking geweest met giftige stoffen?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>heeft u een tatoeage of piercing<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>Hoeveel straling is er in uw omgeving? (WIFI, DECTtelefoons, Mobiele telefoons, UMTS masten e.d)?: <input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>heeft u ooit een tekenbeet opgelopen?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoeveel elementen in uw gebit zijn gevuld of vervangen?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>hoe slaapt u?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>werkt u in nachtdiensten?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>bent u ergens aan verslaafd (geweest)? zo ja, waaraan?<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
    <label>ziekenhuisopnamen<input type="text" name="UNIEKE_NAAM" placeholder="vul in"></label>
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
