<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "The time is " . date("H:i:s") . "<br>";
        echo "The time is " . date("h:i:s a");
        echo "<br> Time zone - ".date_default_timezone_get();

        date_default_timezone_set("America/New_York");
        echo "<br>America zone - the current date and time is " . date("Y-m-d H:i:s");

    ?>
</body>
</html>