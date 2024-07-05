<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="reg.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="images/logo2.png">
        </div>
        <form action="reg.php" method="post">
            <div class="php">
                <?php
                    if (isset($_POST["submit"])) {
                        $fullname = $_POST["fullname"];
                        $email = $_POST["email"];
                        $password = $_POST["password"];
                        $rpassword = $_POST["rpassword"];

                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                        $errors = array();

                        if (empty($fullname) OR empty($email) OR empty($password) OR empty($rpassword)) {
                        array_push($errors, "All fiels are required");
                        }
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Email is not valid");
                        }
                        if (strlen($password) <8) {
                        array_push($errors, "Password must be 8 charachter long");
                        }
                        if ($password !== $rpassword) {
                        array_push($errors, "Password does not match !");
                        }

                        require_once "database.php";
                        $sql = "SELECT * FROM users WHERE email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $rowCount = mysqli_num_rows($result);
                        if ($rowCount>0) {
                            array_push($errors, "Email already exist !");
                        }
                        if (count($errors) >0) {
                            foreach ($errors as $errors) {
                                echo "<div class='alert alert-danger'>$errors</div>";
                            }
                        }
                        else {
                            $sql = "INSERT INTO users (fullname, email, password) VALUES ( ?, ?, ?)";
                            $stmt = mysqli_stmt_init($conn);
                            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);

                            if ($prepareStmt) {
                                mysqli_stmt_bind_param($stmt, "sss", $fullname , $email, $passwordHash);
                                mysqli_stmt_execute($stmt);
                                echo "<div class='alert alert-success'>You are registered succesfully.</div>";
                            }
                            else {
                                die("Something whent wrong !");
                            }
                        }
                    }
                ?>
            </div>
            <h2>REGISTRATION FORM</h2>
            <div class="group">
                <input type="text" name="fullname" placeholder="Fullname">
            </div>
            <div class="group">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="group">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="group">
                <input type="password" name="rpassword" placeholder="RepeatPassword">
            </div>
            <div class="sumbit-button">
                <input type="submit" name="submit" value="Register">
            </div>
            <div class="text-area">
                <p>Already have an account? click <a href="log.php">Log in</a></p>
            </div>
        </form>
    </div>
</body>
</html>