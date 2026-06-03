<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $server = "localhost";
        $user = "root";
        $pwd = "";
        $bd = "hurtownia";

        $conn = mysqli_connect($server, $user, $pwd, $bd);

        if($conn == false)
        {
            die("Nie udało się połączyć z bazą, błąd: ".mysqli_error_connect());
        }
            
        echo "<br>Zostałeś połączony z bazą";

        $sql1 = "SELECT ImieKlienta, NazwiskoKlienta, MiastoKlienta FROM klienci;";
        $ret = mysqli_query($conn, $sql1);
        $ile = mysqli_num_rows($ret);
        echo "<br>Pobrałeś $ile rekordów";

/*
        if($ile > 0)
        {
            $row = mysqli_fetch_assoc($ret);
            echo "<br>Pierwszy wiersz:";
            echo "<br>Imie: ".$row["ImieKlienta"]."<br>Nazwisko: ".$row["NazwiskoKlienta"]."<br>Miasto: ".$row["MiastoKlienta"];
            $row = mysqli_fetch_assoc($ret);
            echo "<br><br>Drugi wiersz:";
            echo "<br>Imie: ".$row["ImieKlienta"]."<br>Nazwisko: ".$row["NazwiskoKlienta"]."<br>Miasto: ".$row["MiastoKlienta"];
            $row = mysqli_fetch_assoc($ret);
            echo "<br><br>Trzeci wiersz:";
            echo "<br>Imie: ".$row["ImieKlienta"]."<br>Nazwisko: ".$row["NazwiskoKlienta"]."<br>Miasto: ".$row["MiastoKlienta"];
        }
*/
        if($ile > 0)
        {
            while($row = mysqli_fetch_assoc($ret))
            {
                echo "<br><br>Imie: ".$row["ImieKlienta"]."<br>Nazwisko: ".$row["NazwiskoKlienta"]."<br>Miasto: ".$row["MiastoKlienta"];
            }
        }

        mysqli_close($conn);
    ?>
</body>
</html>