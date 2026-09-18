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
    <div style="text-align: center;">
        <h1>Day 3 pearning PHP</h1>
    <form action="welcome.php" method="POST">
        <input type="text" name="user_name" placeholder="Name"> <br>
        <input type="text" name="email" placeholder="Email"> <br>
        <input type="submit" name="submit">
    </form>
    </div>
</body>
</html>