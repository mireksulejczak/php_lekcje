<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dane klienta:</h1>
    <form action = "" method="POST">
        <p>Imie: <input type="text" name = "imie"/> </p>
        <p>Nazwisko: <input type="text" name = "nazwisko"/> </p>
        <p>ID województwa: <input type="number" name = "idw"/> </p>
        <p>Kod: <input type="text" name = "kod"/> </p>
        <p>Miasto: <input type="text" name = "miasto"/> </p>
        <p>Ulica: <input type="text" name = "ulica"/> </p>
        <p>Numer: <input type="text" name = "numer"/> </p>
        <input type = "submit" value="Dodaj klienta" name="sub"/>
    </form>
    <?php
        if(isset($_POST["sub"]))
        {
            $imie = htmlspecialchars(trim($_POST["imie"]));
            $nazwisko = htmlspecialchars(trim($_POST["nazwisko"]));
            $idw = htmlspecialchars(trim($_POST["idw"]));
            $kod = htmlspecialchars(trim($_POST["kod"]));
            $miasto = htmlspecialchars(trim($_POST["miasto"]));
            $ulica = htmlspecialchars(trim($_POST["ulica"]));
            $numer = htmlspecialchars(trim($_POST["numer"]));

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

            $sql1 = "INSERT INTO klienci(ImieKlienta, NazwiskoKlienta, IDwojewodztwa, KodPocztowyKlienta, MiastoKlienta, UlicaKlienta,NrDomuKlienta)
                    VALUES('$imie','$nazwisko','$idw','$kod','$miasto','$ulica','$numer');";

            $ret = mysqli_query($conn,$sql1);

            if($ret == true)
                echo "<br>Rekord został dodany";


            mysqli_close($conn);
        }
    ?>
</body>
</html>