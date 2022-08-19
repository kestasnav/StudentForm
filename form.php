<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,100;1,300&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="formStyles.css">
</head>

<body>
    <div class="container">
        <h1>Studento Registracijos Forma</h1>
        <form action="response.php" method="POST">
            <p><b>Vardas:</b></p>
            <input type="text" name="vardas" id="name" placeholder="Vardas" required>
            <p><b>Pavardė:</b></p>
            <input type="text" name="pavarde" id="surname" placeholder="Pavardė" required>
            <p><b>Lytis:</b></p>
            <div class="radioInputs">
                <div>
                    <input type="radio" id="radio" name="lytis" value="Vyras" required>
                    <label for="vyras">Vyras</label>
                </div>
                <div>
                    <input type="radio" id="radio" name="lytis" value="Moteris">
                    <label for="moteris">Moteris</label>
                </div>
                <div>
                    <input type="radio" id="radio" name="lytis" value="Kita">
                    <label for="kita">Kita</label>
                </div>
            </div>
            <p><b>Į paskaitas važinėsiu:</b></p>
            <div class="checkboxes">
                <div class="checks1">
                    <div>
                        <input type="checkbox" id="transport" name="transport[]" value="Dviratis"> Dviračiu
                    </div>
                    <div>
                        <input type="checkbox" id="transport" name="transport[]" value="Automobilis"> Automobiliu
                    </div>
                    <div>
                        <input type="checkbox" id="transport" name="transport[]" value="El. Paspirtukas"> El. Paspirtuku
                    </div>
                </div>

                <div class="checks2">
                    <div>
                        <input type="checkbox" id="transport" name="transport[]" value="Pėsčiomis"> Pėsčiomis
                                  </div>
                    <div>
                        <input type="checkbox" id="transport" name="transport[]" value="Viešasis transportas"> Viešuoju transportu
                                   </div>
                </div>

            </div>
            <p><b>Kokiame mieste studijuosite:</b></p>
                <select name="cities" id="cities">
                <option value="city">Pasirinkite miestą</option>
                <option value="Kaunas">Kaunas</option>
                <option value="Klaipėda">Klaipėda</option>
                <option value="Vilnius">Vilnius</option>
                <option value="Užsienis">Užsienis</option>
            </select>
            <p><b>Trumpai pristatykite save:</b></p>
            <textarea name="about" placeholder="Apie save..." rows="8" cols="40"></textarea>
            <button type="submit" id="btn"><b>Patvirtinti</b></button>
        </form>
    </div>

</body>

</html>