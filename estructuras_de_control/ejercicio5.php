<?php

$dado = rand(1, 6);

switch ($dado) {
    case 1:
        echo "<img src='images/cara1.svg'>";
        break;
    case 2:
        echo "<img src='images/cara2.svg'>";
        break;
    case 3:
        echo "<img src='images/cara3.svg'>";
       break;
    case 4:
        echo "<img src='images/cara4.svg'>";
        break;
    case 5:
        echo "<img src='images/cara5.svg'>";
        break;
    case 6:
         echo "<img src='images/cara6.svg'>";
         break;
}

?>