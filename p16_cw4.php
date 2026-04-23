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
    <h1>Pracownicy:</h1>
    <?php
        $pracownicy = "Jan;Kowalski;magazynier;4200*Tomasz;Nowak;spawacz;5600*Barbara;Kwiatkowska;księgowa;5800";

        $pracownicyTab = explode("*", $pracownicy);

        $tabHtml = "<table>";
        $tabHtml .= "<tr>";
        $tabHtml .= "<th>Imie</th>";
        $tabHtml .= "<th>Nazwisko</th>";
        $tabHtml .= "<th>Stanowisko</th>";
        $tabHtml .= "<th>Płaca</th>";
        $tabHtml .= "</tr>";

        for($i = 0; $i < count($pracownicyTab); $i++)
        {
            $danePracownikaTab = explode(";", $pracownicyTab[$i]);
            $tabHtml .= "<tr>";
            $tabHtml .= "<th>".$danePracownikaTab[0]."</th>";
            $tabHtml .= "<th>".$danePracownikaTab[1]."</th>";
            $tabHtml .= "<th>".$danePracownikaTab[2]."</th>";
            $tabHtml .= "<th>".$danePracownikaTab[3]."</th>";
            $tabHtml .= "</tr>";
        }
        $tabHtml .= "</table>";

        echo $tabHtml;

    ?>
</body>
</html>