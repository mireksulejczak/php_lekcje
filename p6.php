<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--
    Napisz skrypt w którym na stronie wyświetlą się liczby po przecinku w 
    zakresie podanym przez użytkownika, poprzez formularz.
-->
    <form action = "p6.php" method = "POST">
        <p>Od: <input type="number" name = "od" /> </p>
        <p>Do: <input type="number" name = "do" /> </p>
        <input type = "submit" name = "dane" value = "Wświetl"/>
    </form>

    <?php
        if( isset($_POST["dane"]) )
        {
            $od = $_POST["od"];
            $do = $_POST["do"];

            for($i = $od; $i <= $do; ++$i)
            {
                echo "$i, ";
            }
        }
    ?>
</body>
</html>