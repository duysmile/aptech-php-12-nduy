<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- FORM HANDLING ---
 *
 * Form data is html form.
 *
 * Can be use some superglobals to get data from form html.
 *
 */

echo "<h1>1. FORM HANDLING</h1>";

/*
 * EXERCISE 1 : Create form, input your name and the project which you wanna do and show it after submit form to itself, using method POST
 *
 */

/*
 * SUGGESTION : DO IT OUTSIDE the <?php ?>
 *
 * <!DOCTYPE html>
 * <html>
 * <head>
 * </head>
 * <body>
 * <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
 * Name : <input type="text" name="name">
 * <br>
 * Project : <input type="text" name="project">
 * <br>
 * <button type="submit">Submit</button>
 * </form>
 * </body>
 * </html>
 * <?php
 * if ($_SERVER["REQUEST_METHOD"] == "POST") {
 * $name = $_POST["name"];
 * $project = $_POST["project"];
 * echo "Your name is $name and name of your project is $project";
 * }
 * ?>
 *
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
?>
<?php
    function validateInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $err_email = "";
    $err_pass = "";
    $myProfile = "";
    if(isset($_POST['login'])){
        if(validateInput($_POST['email'])){
            $email = validateInput($_POST['email']);
        }

        if(validateInput($_POST['password'])){
            $password = validateInput($_POST['password']);
        }

        if(validateInput($_POST['gender'])){
            $gender = validateInput($_POST['gender']);
        }

        if(!preg_match('/\w+\@\w+\.\w+/', $email)){
            $err_email = "Invalid email";
        }
        else $err_email = "";
        if(!preg_match('/\w{6,32}/', $password)){
            $err_pass = "Password contains at least 6 letters.";
        }
        else $err_pass = "";
        $myProfile = $_POST['email'] . ' - ' . $_POST['password'] . ' - ' . $_POST['gender'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="text" class="form-control" required 
                    value="<?php
                        echo ($err_email || $err_pass) ? $email : ""; 
                    ?>">
                <span class="text-danger"><?= $err_email ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" required
                    value="<?php
                        echo ($err_email || $err_pass) ? $password : ""; 
                    ?>">
                <span class="text-danger"><?= $err_pass ?></span>
            </div>
            <div class="form-check-inline">
                <input name="gender" type="radio" value="Male" required 
                    checked="<?php
                        echo $gender === "Male" ? true : false;
                    ?>"> Male
                <input name="gender" type="radio" value="Female" required
                    checked="<?php
                        echo $gender === "Female" ? true : false;
                    ?>"> Female
            </div>
            <div class="form-group mt-3">
                <button name="login" class="btn btn-primary">
                    Login   
                </button>
            </div>
            
            <p class="mt-3">
                <?= $myProfile ?>
            </p>
        </form>
    </div>             
    
</body>
</html>
