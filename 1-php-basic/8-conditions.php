<?php
echo "<a href=\"./\">BACK</a>";
/* 8. --- CONDITIONS ---
 *
 * Conditional statements are used to perform different actions based on different conditions.
 *
 * Some common conditions in PHP :
 * if ... else ...
 * switch
 *
 */

echo "<h1>8. CONDITIONS</h1>";

/*
 * EXERCISE 1 : Checking $a = 9 is smaller or larger $b = 15 and display your result, using if else.
 *
 */

/*
 * SUGGESTION :
 * $a = 9;
 * $b = 15;
 * if ($a > $b) {
 * echo "$a larger than $b";
 * } else {
 * echo "$a smaller than $b";
 * }
 *
 */

/*
 * EXERCISE 2 : Display the meaning of acronym of some programming language  , using switch
 */

/*
 * SUGGESTION :
 * $language = 'PHP';
 * switch ($languge) {
 * case 'PHP':
 * echo "PHP: Hypertext Preprocessor";
 * break;
 * case 'JS':
 * echo "JavaScript";
 * break;((
 * default:
 * echo "can not find meaning your language";
 * }
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$a = 'a';
$b = 'b';

if($a === 'a') echo "bien \$a la a";
else{
    echo "bien \$a ko la a";
}
echo '<br>';
$date = date('m');
switch($date){
    case '1':
    case '3':
    case '5':
    case '7':
    case '8':
    case '10':
    case '12':
        echo "thang $date co 31 ngay";
        break;
    case '4':
    case '6':
    case '9':
    case '11':
        echo "thang $date co 30 ngay";
        break;
    default:
        $year = (int)date('y');
        if(($year % 4 === 0 && $year % 100 !== 0) || $year % 400 === 0){
            echo "thang $date co 29 ngay";
        }
        else echo "thang $date co 28 ngay"; 
}