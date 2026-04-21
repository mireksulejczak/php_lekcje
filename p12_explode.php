<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rozdziel wyrazy </h1>
    <form action = "p12_explode.php" method="POST">
        <p>Wprowadź tekst: <input type = "text" name="rozdzielany"/></p>
        <p>Wprowadź separator: <input type = "text" name="separator"/></p>
        <input type="submit" value="Rozdziel" name="btRozdziel"/>
    </form>
    
    <?php
        if(isset($_POST["btRozdziel"]))
        {
            $rozdziel = $_POST["rozdzielany"];
            $separator = $_POST["separator"];

            $tab = explode($separator, $rozdziel);

            for($i = 0; $i < count($tab); $i++)
            {
                echo "wyraz $i: ".$tab[$i]."<br>";
            }
        }
    ?>
</body>
</html>