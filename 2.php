<?php
    function menorDivisor($n)
    {
        if($n%2 ==0 && $n%3==0 && $n%5==0)
        {
            return $n;
        }
        $n++;
       return menorDivisor($n);
    }
    echo menorDivisor(1);
?>