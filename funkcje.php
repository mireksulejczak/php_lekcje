<?php
    function CzyPierwsza($a)
    {
        for($i = 2; $i < $a;  $i++)
        {
            if($a % $i == 0)
                return false;
        }
        return true;
    }

    function NWD($a, $b)
    {
        while($a != $b)
        {
            if($a > $b)
                $a = $a - $b;
            else
                $b = $b - $a;
        }

        return $a;
    }
?>