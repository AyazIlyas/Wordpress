<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
</head>
<body>  
    <?php
    function myFunction() {


        $name = $_POST["user_name"];
        $email = $_POST["email"];
    if (isset($_POST["submit"])) {
        if (strlen($name) <= 5) {
            echo "name should be greate then 8";
        }
    }
    if (!str_contains($email, "@")) {
        echo "Email Should be include @";
    }
    }

    if (isset($_POST['submit'])) {
    myFunction();
    }
    ?>
    <?php
    include("header.php");
    ?>
    <div style="text-align: center;">
        
    <form action="welcome.php" method="POST">
        <input type="text" name="user_name" placeholder="Name"> <br>
        <input type="text" name="email" placeholder="Email"> <br>
        <input type="submit" name="submit">
    </form>
    </div>
    <div class="content">
        <br>
        <p>Learning Require and Include.</p>
        <br>
        <p>The use of include statement is show 1 php file into anohter. <br>
        Include and Require are same but the main difference is if error was came the require show only error.
    </p>
    </div>
</body>
</html>