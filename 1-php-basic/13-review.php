<?php
echo "<a href=\"./\">BACK</a>";

echo "<h1>13. REVIEW</h1>";
/* EXERCISE :
1. Create an Array about data of authors like :
$authors = [
[
"name" => "Lorem",
"age" => "18",
"posts_quantity" => "5",
],
[
"name" => "Lorem",
"age" => "18",
"post_quantity" => "5",
],
];

+ At least 5 authors.

2. Display it into website depends on Bootstrap 4 Table, in 4 column : Name, Age, Post Counting, Salary.

3. Make sure, if posts_quantity > 10, show at Salary Column = posts_quantity * 10000, otherwise, display 0.

 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";

$author = [
    [
        'name' => 'Duy',
        'age' => '18',
        'posts_quantity' => '2',
    ],
    [
        'name' => 'Duy1',
        'age' => '16',
        'posts_quantity' => '13',
    ],
    [
        'name' => 'Duy2',
        'age' => '17',
        'posts_quantity' => '8',
    ],
    [
        'name' => 'Duy3',
        'age' => '19',
        'posts_quantity' => '15',
    ],
    [
        'name' => 'Duy4',
        'age' => '21',
        'posts_quantity' => '11',
    ],
];
$index = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Author</title>
</head>
<body>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Post Counting</th>
                    <th>Salary</th>
                </tr>  
            </thead>
            <?php foreach($author as $key => $value){
                    $index += 1; 
                ?>
            <tr>
                <th scope="row"><?=$index ?></th>
                <th><?=$value['name'] ?></th>
                <th><?=$value['age'] ?></th>
                <th><?=$value['posts_quantity'] ?></th>
                <th><?=$value['posts_quantity'] > 10 ? $value['posts_quantity']*10000 : 0 ?></th>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>