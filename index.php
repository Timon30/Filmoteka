<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../zadanie1/styl1.css" rel="stylesheet">
    <title>Filmy</title>
</head>

<body>

    <div class="center">
        <div class="panelLewy">
            <h3>Dostępne gatunki filmu</h3>
            <ol>
                <li>Sci-Fi</li>
                <li>animacja</li>
                <li>dramat</li>
                <li>horror</li>
                <li>komedia</li>
            </ol>
            <p><a href="./kadr.jpg">Pobierz obraz</a></p>
            <p><a href="http://repertuar-kin.pl">Sprawdź repertuar kin</a></p>
        </div>
        <div class="prawy1">
            <h1>FILMOTEKA</h1>
        </div>
        <div class="prawy2">
            <br><br>
            <form action="../zadanie1/dodaj.php" method="POST">
                <label>Tytuł: </label><input type="text" name="tytul"><br><br>
                <label>Gatunek filmu: </label><input type="number" name="gatunek"><br><br>
                <label>Rok produkcji: </label><input type="text" name="rok"><br><br>
                <label>Ocena: </label><input type="text" name="ocena"><br><br>
                <input type="reset" name="czysc" value="CZYŚĆ">
                <input type="submit" name="wyslij" value="DODAJ">
                <br><br>
            </form>
        </div>
        <div class="prawy3">
            <img src="./kadr.jpg" alt="zdjęcia filmowe">
        </div>
        <div class="stopka">
            Autor strony: 90683405431
        </div>
    </div>

</body>

</html>