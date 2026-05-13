<?php
    include "funkcje.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p18_funkcje2.php" method = "POST">
        <p>Wpisz liczbę: <input type = "number" name="x" /> </p>
        <input type = "submit" name = "btPierwsza" value = "CzyPierwsza"/>
    </form>

    <?php
        if(isset($_POST["btPierwsza"]))
        {
            $x = intval($_POST["x"]);


            if(CzyPierwsza($x))
                echo "<p style = 'color:green'> To jest liczba pierwsza </p>";
            else
                echo "<p style = 'color:red'> To NIE jest liczba pierwsza </p>";
        }
    ?>
</body>
</html>