<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Rozdziel wyrazy </h1>
    <form action = "p15_cw3.php" method="POST">
        <p>Wpisz liczby rograniczone znakiem *: <input type = "text" name="rozdzielany"/></p>
        <input type="submit" value="Ile pierwszych" name="btRozdziel"/>
    </form>
    
    <?php
        if(isset($_POST["btRozdziel"]))
        {
            $rozdziel = $_POST["rozdzielany"];
            $separator = "*";
            $ilePierwszych = 0;

            $liczby = explode($separator, $rozdziel);

            for($i = 0; $i < count($liczby); $i++)
            {
                $sprawdzana = intval($liczby[$i]);
                if(czyPierwsza($sprawdzana))
                {
                    echo "<span style = 'color:red'>$sprawdzana</span>, ";
                    $ilePierwszych++;
                }
                else
                {
                    echo "$sprawdzana, ";
                }
            }
            echo "<br>Ilość liczb pierwszych $ilePierwszych";
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