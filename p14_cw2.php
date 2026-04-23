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
    <form action = "p14_cw2.php" method="POST">
        <p>Wprowadź liczby rozgraniczone średnikiem: <input type = "text" name="rozdzielany"/></p>
        <input type="submit" value="Oblicz" name="btRozdziel"/>
    </form>
    
    <?php
        if(isset($_POST["btRozdziel"]))
        {
            $rozdziel = $_POST["rozdzielany"];
            $separator = ";";

            $liczby = explode($separator, $rozdziel);
            $suma = 0;

            for($i = 0; $i < count($liczby); $i++)
            {
               $suma = $suma + intval($liczby[$i]);
            }
            $srednia = $suma / count($liczby);
            echo "Średnia z liczb = $srednia"; 

        }
    ?>
</body>
</html>