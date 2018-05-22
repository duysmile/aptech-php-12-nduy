<?php
echo "<a href=\"./\">BACK</a>";
/* 2. --- FILE CREATE WRITE ---
 *
 * fopen() or die
 * fwrite()
 * fclose()
 *
 */

echo "<h1>2. FILE CREATE WRITE</h1>";

/*
 * EXERCISE 1 : Create yourname.txt, write your name into it and display.
 *
 */

/*
 * SUGGESTION :
 *
$file = fopen("nam.txt", "w") or die("Can't open the file.");
fwrite($file, "Nguyen Hai Nam");
fclose($file);
echo readfile("nam.txt");
 *
 */

/*
 * EXERCISE 2 : Insert your project name inside file yourname.txt and display line by line.
 */

/*
 *
$file = fopen("nam.txt", "a+") or die("Can't open the file");
fwrite($file, "\nNews Website");
fclose($file);

$file = fopen("nam.txt", "a+") or die("Can't open the file");
while (!feof($file)) {
echo fgets($file) . "<br>";
}
fclose($file);
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$file = fopen('newfile.txt', 'w') or die("Cant create a new file");

fwrite($file, "Hello World\n");
fclose($file);

echo readfile('newfile.txt');

$file = fopen('newfile.txt', 'a+') or die('Cant open to edit file');

fwrite($file, "Good bye world!");

fclose($file);

echo "<br>";

$file = fopen('newfile.txt', 'r') or die('Cant open to read file');
while(!feof($file)){
    echo fgets($file) . '<br>';
}

fclose($file);
// echo readfile('newfile.txt');