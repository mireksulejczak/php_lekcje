<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
    Napisz skrypt w którym pobieramy od użytkownika 2 liczby całkowite, dodajemy je
     i wyświetlamy wynik
-->
    <form action = "p7.php" method = "POST">
        <p>X: <input type="number" name = "x" /> </p>
        <p>Y: <input type="number" name = "y" /> </p>
        <input type = "submit" name = "dodaj" value = "Dodawanie"/>
        <input type = "submit" name = "minus" value = "Odejmowanie"/>
        <input type = "submit" name = "iloczyn" value = "Mnożenie"/>
        <input type = "submit" name = "dziel" value = "Dzielenie"/>
        <input type = "submit" name = "potega" value = "Potęgowanie"/>
        <input type = "submit" name = "nwd" value = "NWD"/>
    </form>

    <?php
        if(isset($_POST["dodaj"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);
            $wynik = $x + $y;
            echo "Wynik dodawania liczb $x i $y = $wynik";
        }
        else if(isset($_POST["minus"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);
            $wynik = $x - $y;
            echo "Wynik odejmowania liczb $x i $y = $wynik";
        }
        else if(isset($_POST["iloczyn"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);
            $wynik = $x * $y;
            echo "Wynik mnożenia liczb $x i $y = $wynik";
        }
        else if(isset($_POST["dziel"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);
            $wynik = $x / $y;
            echo "Wynik dzielenia liczb $x i $y = $wynik";
        }
        else if(isset($_POST["potega"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);   
            $wynik = pow($x, $y);
            echo "Wynik potęgowania $x do $y = $wynik";
        }
        else if(isset($_POST["nwd"]))
        {
            $x = intval($_POST["x"]);
            $y = intval($_POST["y"]);   
            $wynik = nwd($x, $y);
            echo "Największy wspólny dzielnik liczb $x i $y = $wynik";
        }

        function nwd($a, $b)
        {
            while($a != $b)
            {
                if($a > $b)
                    $a = $a - $b;
                else
                    $b = $b - $a;
            }
            return $a;
        }
    ?>
</body>
</html>