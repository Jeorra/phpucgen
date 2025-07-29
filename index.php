<?php
function  ucgen($sayi)
{
    for ($i=1; $i<=$sayi; $i++)
    {
        $j=1;
        while($j<=$i)
        {
            echo "0";
            $j++;
        }
        echo "<br>";
    }
}
ucgen(15);
?>

