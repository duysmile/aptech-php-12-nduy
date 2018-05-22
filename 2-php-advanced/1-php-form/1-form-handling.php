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

    function addToValidate($data, $arr){
        if(validateInput($_POST[$data])){
            $arr[$data] = validateInput($_POST[$data]);
        }
        return $arr;
    }

    $error = [
        "email" => "",
        "pass" => "",
    ];

    $validate = [
        "email" => "",
        "password" => "",
    ];

    $myProfile = "";

    if(isset($_POST['login'])){
        $validate = addToValidate('email', $validate);
        $validate = addToValidate('password', $validate);
        $validate = addToValidate('gender', $validate);

        if(!preg_match('/\w+\@\w+\.\w+/', $validate['email'])){
            $error['email'] = "Invalid email";
        }
        else $err_email = "";
        if(!preg_match('/\w{6,32}/', $validate['password'])){
            $error['pass'] = "Password contains at least 6 letters.";
        }
        else $err_pass = "";
        $myProfile = $validate['email'] . ' - ' . $validate['password'] . ' - ' . $validate['gender'];
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
<body style="background:">
    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="box-shadow:2px 5px 10px 4px #eee" class="p-3">
        <img src="https://getbootstrap.com/favicon.ico" class="d-flex m-auto pb-2">
            <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="padding-right: 42px">
                        Email
                    </span>
                </div>
                <input name="email" type="text" class="form-control" required placeholder="Input your email"
                    value="<?php
                        echo ($error) ? $validate['email'] : ""; 
                    ?>">
            </div>
            <span class="text-danger"><?= $error['email'] ?></span>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            Password
                        </span>
                    </div>
                    <input name="password" type="password" class="form-control" required placeholder="Input your password"
                    value="<?php
                        echo ($error) ? $validate['password'] : ""; 
                    ?>">
                </div>
                <span class="text-danger"><?= $error['pass'] ?></span>
            </div>
            <div class="form-check-inline">
                <input name="gender" type="radio" value="Male" required 
                    checked="<?php
                        echo $validate['gender'] === "Male" ? true : false;
                    ?>"> 
                    <span class="pr-2">Male</span>
                <input name="gender" type="radio" value="Female" required
                    checked="<?php
                        echo $validate['gender'] === "Female" ? true : false;
                    ?>"> Female
            </div>
            <div class="form-group mt-3">
                <button name="login" class="d-flex m-auto btn btn-primary">
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
