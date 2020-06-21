/*
Hieronder wat voorbeelden. Paar notes:
- Alles met hoofdletters hieronder kun je aanpassen.
- Al deze tags kunnen tussen <form method="post"><fieldset> en </fieldset></form> geplaats worden. Ik heb daar een comment gemaakt zodat je kan zien waar ik bedoel.
- Met / * en * / (aan elkaar) kun je comments maken, dat is handig om bijv. je vragen beter te kunnen groeperen in de code.
- Geen CSS toevoegen, inline CSS faalt op deze server. CSS doen we later wel.
- Probeer met indentation te werken, dus dat alles netjes inspringt. Hiervoor kun je vier spaties gebruiken. Bijvoorbeeld:
<form>
    <label>...</label>
</form>  
*/

/* Single line text field */
  <label>NAAM_BOVEN_INVOERVELD<input type="text" name="UNIEKE_NAAM" placeholder="PLACEHOLDER"></label>

/* Single line text field required */
  <label>NAAM_BOVEN_INVOERVELD<span class="req">*</span><input type="text" name="UNIEKE_NAAM" placeholder="PLACEHOLDER" required></label>

/* Single line phone number field */
  <label>Telefoonnummer<input type="tel" name="UNIEKE_NAAM" placeholder="PLACEHOLDER"></label>

/* Single line phone number field required*/
  <label>Telefoonnummer<span class="req">*</span><input type="tel" name="UNIEKE_NAAM" placeholder="PLACEHOLDER" required></label>

/* Single line email address field */
  <label>E-mailadres<input type="email" name="UNIEKE_NAAM" placeholder="PLACEHOLDER"></label>

/* Single line email address field required */
  <label>E-mailadres<span class="req">*</span><input type="email" name="UNIEKE_NAAM" placeholder="PLACEHOLDER" required></label>

/* Multi line text field
Deze zijn nu nog heel erg lelijk, ik moet ze nog stylen met CSS */
  <label>NAAM_BOVEN_INVOERVELD<textarea id="TEXTAREA_ID" name="UNIEKE_NAAM" placeholder="PLACEHOLDER"></label>

/* Multi line text field
Deze zijn nu nog heel erg lelijk, ik moet ze nog stylen met CSS */
  <label>NAAM_BOVEN_INVOERVELD<span class="req">*</span><textarea id="TEXTAREA_ID" name="UNIEKE_NAAM" placeholder="PLACEHOLDER" required></label>

/* Multiple choice radio buttons
Let op: 'name' moet hier voor alle antwoorden identiek maar wel uniek voor deze vraag zijn! */
  <input type="radio" id="OPTIE_A" name="UNIEKE_NAAM" value="OPTIE_A">
  <label for="OPTIE_A">NAAM_LABEL</label><br>
  <input type="radio" id="OPTIE_B" name="UNIEKE_NAAM" value="OPTIE_B">
  <label for="OPTIE_B">NAAM_LABEL</label><br>
  <input type="radio" id="OPTIE_C" name="UNIEKE_NAAM" value="OPTIE_C">
  <label for="OPTIE_C">NAAM_LABEL</label><br>

/* Multiple choice checkbox
Let op: 'name' moet hier voor alle antwoorden wel weer uniek zijn (anders wordt het een radio button)! */
  <input type="checkbox" id="OPTIE_A" name="OPTIE_A" value="VALUE_A">
  <label for="OPTIE_A"> NAAM_OPTIE_A</label><br>
  <input type="checkbox" id="OPTIE_B" name="OPTIE_B" value="VALUE_B">
  <label for="OPTIE_B"> NAAM_OPTIE_B</label><br>
  <input type="checkbox" id="OPTIE_C" name="OPTIE_C" value="VALUE_C">
  <label for="OPTIE_C"> NAAM_OPTIE_C</label><br>

/* maximize length for input
Dit is simpel met maxlength="HOEVEELHEID_TEKENS". Voorbeeld:*/
<label>Je moeder<input type="text" name="Je moeder" maxlength="10" placeholder="Je moeder"></label>
      
