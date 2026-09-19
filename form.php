<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.form_textarea {
    width: 166px;
    height: 50px;
    max-width: 250px;
}
</style>
<body>
    <div>
        <?php include_once("header.php") ?>
    </div>
    <div class="content" style="display: flex; justify-content: center;">
        <div class="form_div">
            <h4>Registration Form</h4>
           <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
             <div class="main_form">
                <input type="text" placeholder="Enter Your Name" name="username">
                <input type="text" placeholder="Enter Your Email" name="email">
                <input type="text" placeholder="Enter Your Password" name="password">
                <textarea class="form_textarea" placeholder="Enter Your Purpose" name="purpose"> </textarea>
                <div>
                    <input type="text" name="age" placeholder="Enter Your Age">
                </div>
                <br>
                <input type="submit" name="submit">
            </div>
           </form>
        </div>
        <?php
        function form_details() {
            $name = $_POST["username"];
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = $_POST["password"];
            $purpose = $_POST["purpose"];
            $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

            if (empty($name) || empty($email) || empty($password) || empty($purpose) || empty($age)) {
                echo "Please Fill all thigns on form";
            } else {
                echo "Form is submitted";
            }


            if ($email === false){
                //
            }  else {
                //
            };

            if (!$age == null) {
                if ($age < 18) {
                echo "User should be greate than 18";
            } else if ($age > 100) {
                echo "Please enter valid age";
            }
            }


            $purpose_sec = htmlentities($purpose, ENT_QUOTES);


            if (!empty($password)) {
                if ( strlen($password) < 8) {
                echo "Password should be longer then 8 characters.";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            };
            }

  
            















            // Start PHP secquirty
            // echo htmlentities($purpose, ENT_QUOTES);
            // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            // echo $hashedPassword;
            // $decrypt = password_verify($password, $hashedPassword);

            // if (!filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT)) {
            //     echo "Please enter valid age";
            // } else {
            //     echo "Age is valid";
            // }

            // if (filter_var($age, FILTER_VALIDATE_INT) === false) {
            //     echo "Please enter a valid age.";
            // } else {
            //     echo "Age is valid.";
            // }
        }
        if (isset($_POST["submit"])) {
            form_details();
        }
        ?>
    </div>
    <?php include_once("footer.php") ?>
</body>
</html>