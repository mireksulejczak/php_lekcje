<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "p19_funkcje3.php" method = "POST">
        <p>A: <input type = "number" name = "a"/> </p>
        <p>B: <input type = "number" name = "b"/> </p>
        <input type = "submit" name = "btNWD" value="Oblicz NWD"/>
    </form>

    <?php
        include "funkcje.php";

        if(isset($_POST["btNWD"]))
        {
            $a = intval($_POST["a"]);
            $b = intval($_POST["b"]);

            $nwd = NWD($a, $b);

            echo "NWD z liczb $a i $b = $nwd";
        }
    ?>
</body>
</html>