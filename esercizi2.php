





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form actions="">
    <fieldset>
        <h1>Calcolatrice</h1>

        <label for="a">A</label>
        <input id="a" type="text" name="a" value>
        <br>
        <label for="b">B</label>
        <input id="b" type="text" name="b" value>
        <br><br>
    </fieldset>

        <h2>OPERAZIONI</h2>
        <div>
            <input id="somma" type="checkbox" name="somma" value="somma" />
            <label for="somma">somma </label>
        </div>


        <div>
            <input id="differenza" type="checkbox" name="differenza" value="differenza" />
            <label for="differenza">differenza </label>
        </div>


        <div>
            <input id="prodotto" type="checkbox" name="prodotto" value="prodotto" />
            <label for="prodotto">prodotto </label>
        </div>


        <div>
            <input id="quoziente" type="checkbox" name="quoziente" value="quoziente" />
            <label for="quoziente">quoziente </label>
        </div>


        <h2>OPZIONI</h2>


        <div>
            <input id="abs" type="checkbox" name="options[]" value="absolute" />
            <label for="abs">Valore assoluto </label>
        </div>


        <div>
            <input id="square" type="checkbox" name="options[]" value="square" />
            <label for="square">Quadrato </label>
        </div>


        <div>
            <input id="arr" type="checkbox" name="options[]" value="arr" />
            <label for="arr">arrotonda a 2 decimali </label>
        </div>
        <br><br>

        <input type="submit" value="manda">


    </form>
    
</body>
</html>