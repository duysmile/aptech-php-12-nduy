<?php
echo "<a href=\"./\">BACK</a>";
/* 11. --- BUILT-IN FUNCTIONS ---
 *
 * PHP has more than 1000 built-in functions
 *
 */

echo "<h1>11. BUILT-IN FUNCTIONS</h1>";

/*
 * EXERCISE 1 : Sort $arr = [30,21,1,5,8,22,18] by numeric.
 *
 */

/*
 * SUGGESTION :
 *
 * $arr = [30, 21, 1, 5, 8, 22, 18];
 * sort($arr);
 * print_r($arr);
 *
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";

$arr = [1,2,3,0,7,4,5];
sort($arr);
print_r($arr);
echo "<br>";
rsort($arr);
print_r($arr);
