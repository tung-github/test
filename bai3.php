<?php
$a = array(1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15);
$b = [];
rsort($a);
$dem = $a[0]- $a[1];
for($i=0; $i<count($a); $i++)
{
    if ($a[$i] != end($a)){
        if(($a[$i] - $a[$i+1]) < $dem && ($a[$i] - $a[$i+1]) > 0){
            $dem = $a[$i] - $a[$i+1];
        }
    }
}
for($i=0; $i<count($a); $i++)
{
    if ($a[$i] != end($a)){
        if(($a[$i] - $a[$i+1]) == 1){
            $b[] = array($a[$i+1],$a[$i]);
        } 
    }
    
}
print_r($b);