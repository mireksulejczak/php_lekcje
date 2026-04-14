<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Skrypt sprawdzający czy liczba pierwsza</h1>
    <form action = "p8.php" method = "POST">
        <p>X: <input type="number" name = "x" /> </p>
        <input type = "submit" name = "pierwsza" value = "CzyPierwsza"/>
    </form>

    <?php
        if(isset($_POST["pierwsza"]))
        {
            $x = intval($_POST["x"]);
            $wynik = czyPierwsza($x);
            if($wynik == true)
                echo "Liczba $x jest liczbą pierwszą";
            else
                echo "Liczba $x NIE jest liczbą pierwszą";
        }

        function czyPierwsza($a)
        {
            if($a < 2)
                return false;

            for($i = 2; $i < $a; $i++)
            {
                if($a % $i == 0)
                    return false;
            }
            return true;
        }
    ?>
</body>
</html>