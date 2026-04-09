<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <p>Strona ta prezenutje sposób przesyłania danych z formularza na serwer.
        Dane przesłane na serwer, są przechwytywane przez skrypt PHP umieszczony w tym samym pliku.
        Ten przykład wykorzystjue metodę POST do przesyłania danych z formularza.
        Metoda ta powoduje że przesyłane dane NIE są widoczne w adresie strony
    </p>

    <form action = "p5_formularz.php" method = "POST">
        <p>Imie: <input type="text" name = "imie" /> </p>
        <p>Wiek: <input type="number" name = "wiek" /> </p>
        <input type = "submit" name = "dane" value = "Wyślij"/>
    </form>

    <?php
        if( isset($_POST["dane"]) )
        {
            $imie = $_POST["imie"];
            $wiek = $_POST["wiek"];

            echo "<h1>Witaj $imie. Podałeś że masz $wiek lat</h1>";
        }
    ?>
</body>
</html>