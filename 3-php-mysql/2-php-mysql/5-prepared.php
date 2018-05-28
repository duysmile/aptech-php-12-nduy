<?php
echo "<a href=\"./\">BACK</a>";
/* 5. --- PREPARED ---
 *
 * Using MySQLi
 *
 */

echo "<h1>5. PREPARED</h1>";

/*
 * EXERCISE 1 : Create prepare and insert some values.
 *
 */

/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();

$stmt = $conn->prepare("INSERT INTO namnh_news.nnUser (uLastName,uFirstName,uEmail,uRole) VALUES (?,?,?,?)");
$stmt->bind_param("sssi", $uLastName, $uFirstName, $uEmail, $uRole);

$uLastName = 'Ford';
$uFirstName = 'Henry';
$uEmail = "henry.ford@ford.com";
$uRole = 2;
$stmt->execute();

echo "Using Prepared to insert new data successfully";

$stmt->close();
$conn->close();
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
require './helper.php';
$conn = connectDatabase();

$stmt = $conn->prepare("insert into nduy_news.nnUser (uLastName,uFirstName,uEmail,uRole) VALUES (?,?,?,?)");
//sssi la kieu du lieu string string string int
$stmt->bind_param("sssi", $uLastName, $uFirstName,$uEmail, $uRole);

$uLastName = 'Ford';
$uFirstName = 'Henry';
$uEmail = "henry.ford@ford.com";
$uRole = 2;

$stmt->execute();

echo 'Using prepared to insert successfully';

$stmt->close();
$conn->close();