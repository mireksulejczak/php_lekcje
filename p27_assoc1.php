<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th
        {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="" method = "POST">
        <p>Marka: <input type="text" name="marka"></p>
        <p>Model: <input type="text" name="model"></p>
        <p>Rocznik: <input type="year" name="rocznik"></p>
        <p>Cena: <input type="number" name="cena"></p>
        <input type="submit" name="btn" value="Sprawdz">
    </form>
 
    <?php
    if(isset($_POST["btn"]))
        {
            $marka = $_POST["marka"];
            $model = $_POST["model"];
            $rocznik = $_POST["rocznik"];
            $cena = $_POST["cena"];
 
            $tab = array("Marka"=>$marka, "Model"=>$model, "Rocznik"=>$rocznik, "Cena"=>$cena);
 
            echo "<table><tr>";
            echo "<th>Dane</th>";
            echo "<th>Wartosci</th></tr>";
            foreach($tab as $k => $v)
            {
                echo "<tr>";
                echo "<td>$k</td>";
                echo "<td>$v</td>";
                echo "</tr>";
            }
           
            echo "</table>";
        }
    ?>
</body>
</html>