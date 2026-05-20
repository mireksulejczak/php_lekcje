<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Równanie Kwadratowe</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 30px; font-weight: bold; }
        input[type="number"] { width: 80px; padding: 5px; }
        input[type="submit"] { padding: 5px 15px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background-color: #0056b3; }
        .wynik { margin-top: 20px; padding: 10px; background-color: #f8f9fa; border-left: 5px solid #28a745; }
        .blad { border-left-color: #dc3545; }
    </style>
</head>
<body>

    <h2>Rozwiązywanie równania kwadratowego (ax^2 + bx + c = 0)</h2>

    <form method="post" action="">
        <div class="form-group">
            <label for="a">a:</label>
            <input type="number" step="any" name="a" id="a" required value="<?php echo isset($_POST['a']) ? htmlspecialchars($_POST['a']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="b">b:</label>
            <input type="number" step="any" name="b" id="b" required value="<?php echo isset($_POST['b']) ? htmlspecialchars($_POST['b']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="c">c:</label>
            <input type="number" step="any" name="c" id="c" required value="<?php echo isset($_POST['c']) ? htmlspecialchars($_POST['c']) : ''; ?>">
        </div>
        <input type="submit" name="oblicz" value="Oblicz pierwiastki">
    </form>

<?php
// Definicja funkcji liczącej pierwiastki
function PierwiastkiRownaniaKwadratowego($a, $b, $c, &$x1, &$x2) {
    // Warunek sprawdzający, czy równanie jest kwadratowe (a != 0)
    if ($a == 0) {
        return -1; // Zwracamy -1 jako sygnał, że to nie jest równanie kwadratowe
    }

    // Obliczanie wyróżnika równania (delty)
    $delta = ($b * $b) - (4 * $a * $c);

    if ($delta > 0) {
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        $x2 = (-$b + sqrt($delta)) / (2 * $a);
        return 2;
    } elseif ($delta == 0) {
        $x1 = -$b / (2 * $a);
        $x2 = null; // Czyszczenie zmiennej referencyjnej
        return 1;
    } else {
        $x1 = null; // Brak pierwiastków rzeczywistych
        $x2 = null;
        return 0;
    }
}

// Obsługa przesłania formularza
if (isset($_POST['oblicz'])) {
    // Pobranie i rzutowanie danych z formularza na typ float
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $c = (float)$_POST['c'];

    // Inicjalizacja zmiennych, do których funkcja zapisze wyniki poprzez referencję
    $p1 = null;
    $p2 = null;

    // Wywołanie funkcji
    $iloscPierwiastkow = PierwiastkiRownaniaKwadratowego($a, $b, $c, $p1, $p2);

    // Wyświetlenie odpowiedniego komunikatu
    echo '<div class="wynik">';
    echo "<h3>Wynik dla równania: {$a}x² + ({$b})x + ({$c}) = 0</h3>";

    switch ($iloscPierwiastkow) {
        case 2:
            echo "<p>Równanie ma <strong>dwa</strong> pierwiastki:</p>";
            echo "x₁ = " . round($p1, 4) . "<br>";
            echo "x₂ = " . round($p2, 4);
            break;
        case 1:
            echo "<p>Równanie ma <strong>jeden</strong> pierwiastek:</p>";
            echo "x₁ = " . round($p1, 4);
            break;
        case 0:
            echo "<p>Równanie <strong>nie ma</strong> pierwiastków rzeczywistych (delta < 0).</p>";
            break;
        case -1:
            echo "<p class='blad'>To nie jest równanie kwadratowe (parametr 'a' nie może być równy 0).</p>";
            break;
    }
    echo '</div>';
}
?>

</body>
</html>