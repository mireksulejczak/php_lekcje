<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i = 0;
        if(isset($_POST["btInc"]))
        {
            $i = intval($_POST["x"]);
            $i++;
        }
        if(isset($_POST["btDec"]))
        {
            $i = intval($_POST["x"]);
            $i--;
        }
        if(isset($_POST["btReset"]))
        {
            $i=0;
        }
    ?>

    <form action = "p20_Kliker.php" method="POST">
        <p>Licznik: <input type="number" name="x"  value= "<?php echo $i ?>" /> </p>
        <input type="submit" name="btInc" value="inkrementuj"/>
        <input type="submit" name="btDec" value="dekrementuj"/>
        <input type="submit" name="btReset" value="resetuj"/>
    </form>
</body>
</html>