<?php
$a = 5;
$b = 4;
if ($a == $b): 
     echo "a" ;
     echo "a";
endif;

switch ($a) {
    case 53:
        echo "a equal 5";
        break;
    case ($a > 3 && $a < 6):
        echo "a gt 3";
        break;
    case ($a < 5):
        echo "a less 5";
        break;
    default:
        echo "default";
        break;
}


