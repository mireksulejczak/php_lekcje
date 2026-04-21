<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #txtArea
        {
            width: 200px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Skrypt szukający wyrazu w tekście </h1>
    <form action = "p9_szukaj.php" method="POST">
        <p>Wprowadź tekst:
            <textarea name="txt" id = "txtArea"></textarea>
        </p>
        <p>Szukany wyraz: 
            <input type = "text" name="szukany"/>
        </p>
        <input type="submit" value="Szukaj" name="btSzukaj"/>
    </form>
    
    <?php
        if(isset($_POST["btSzukaj"]))
        {
            $tekst = $_POST["txt"];
            $szukany = $_POST["szukany"];
/*
            $czy = str_contains($tekst,$szukany);
            if($czy == true)
            {
                echo "W tekście znajduje się szukany wyraz $szukany";
            }
            else
            {
                echo "W tekście NIE znajduje się szukany wyraz $szukany";
            }
*/
            //optymalizacja kodu

            if(str_contains($tekst,$szukany))
            {
                echo "<p>W tekście znajduje się szukany wyraz $szukany </p>";
                $pozycja = strpos($tekst, $szukany);
                echo "<p>Szukany wyraz znajduje się na pozycji $pozycja</p>";
            }
            else
                echo "W tekście NIE znajduje się szukany wyraz $szukany";

        }
    ?>
</body>
</html>