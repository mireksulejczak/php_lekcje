<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <h1>Rozdziel wyrazy </h1>
    <form action = "p13_cw1.php" method="POST">
        <p>Wprowadź marki samochodów: <input type = "text" name="rozdzielany"/></p>
        <p>Wprowadź separator: <input type = "text" name="separator"/></p>
        <input type="submit" value="Rozdziel" name="btRozdziel"/>
    </form>
    
    <?php
        if(isset($_POST["btRozdziel"]))
        {
            $rozdziel = $_POST["rozdzielany"];
            $separator = $_POST["separator"];

            $tab = explode($separator, $rozdziel);

            echo "<table>";
            echo "<tr><th>Samochody</th></tr>";
            for($i = 0; $i < count($tab); $i++)
            {
                echo "<tr><td> {$tab[$i]} </td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>