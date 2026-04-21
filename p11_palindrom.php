<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Czy palindrom ? </h1>
    <form action = "p11_palindrom.php" method="POST">
        <p>Wprowadź wyraz: 
            <input type = "text" name="sprawdzany"/>
        </p>
        <input type="submit" value="Sprawdź" name="btSprawdz"/>
    </form>
    
    <?php
        if(isset($_POST["btSprawdz"]))
        {
            $txt = strtolower(trim($_POST["sprawdzany"]));

            if($txt == strrev($txt))
                echo "To jest palindrom";
            else
                echo "To NIE jest palindrom";
        }
    ?>
</body>
</html>