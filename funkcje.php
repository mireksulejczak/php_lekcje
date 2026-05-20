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

    function czyAnagramy($txt1, $txt2)
    {
        trim($txt1);
        trim($txt2);
        if(strlen($txt) != strlen($txt2))
            return false;

        $txt1_tab = str_split($txt1);
        $txt2_tab = str_split($txt2);

        sort($txt1_tab);
        sort($txt2_tab);
        if($txt1_tab == $txt2_tab)
            return true;
        else
            return false;

    }
?>