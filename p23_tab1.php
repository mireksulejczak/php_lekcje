<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <p>Liczby po średniku: <input type="text" name="liczby" required></p>
        <input type="submit" value="Oblicz sumę" name="btSuma"/>
    </form>

    <?php
        if(isset($_POST["btSuma"]))
        {
            $x = htmlspecialchars(trim($_POST["liczby"]));
            $liczby = explode(";", $x);
            $suma = 0;
            foreach($liczby as $a)
            {
                $suma += $a; 
            }

            $srednia = $suma/count($liczby);

            echo "Suma = $suma <br>Średnia = $srednia";
            
        }
    ?>
</body>
</html>