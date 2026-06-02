<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
        <p>Wybierz date: <input type = "date" name="data" /></p>
        <input type = "submit" value="Ile dni ?" name="roznica"/>
    </form>

    <?php
        if(isset($_POST["roznica"]))
        {
            $d1 = $_POST["data"];

            echo "<br>Wybrałeś: ".$d1;
            $d1_time = strtotime($d1);  // utworzenie obiektu na podstawie string pobranego z inputa
            $now = time();

            if($d1_time > $now)
            {
                $roznica = round(($d1_time - $now)/60/60/24);
                echo "<br>Do dnia ".date("d-m-Y",$d1_time)." pozostało $roznica dni";
            }
            else
            {
                $roznica = round(($now - $d1_time)/60/60/24);
                echo "<br>Od dnia ".date("d-m-Y",$d1_time)." upłynęło $roznica dni";
            }
        }
    ?>
</body>
</html>