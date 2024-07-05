<?php
session_start();
if (isset($_SESSION["user"])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="logs.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="images/logo2.png">
        </div>
        <form action="log.php" method="post">
            <div class="php">
                <?php
                if (isset($_POST["login"])) {
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    require_once "database.php";
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if ($user) {
                        if (password_verify($password, $user["password"])) {
                            session_start();
                            $_SESSION["user"] = "yes";
                            header("location: index.php");
                            die();
                        }
                        else {
                            echo "<div class = 'alert alert-danger'> password does not match</div>";
                        }
                    }
                    else {
                        echo "<div class = 'alert alert-danger'> Email does not exist</div>";
                    }
                }
                ?>
            </div>
            <h2>Log In</h2>
            <div class="group">
                <input type="email" placeholder="Enter Email" name="email" class="form-control">
            </div>
            <div class="group">
                <input type="password" placeholder="Enter Password" name="password" class="form-control">
            </div>
            <div class="sumbit-button">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
            <div class="text-area">
                <p>Don't have an account? click <a href="reg.php">Register</a></p>
                <p>Go back to <a href="dale.php">Homepage</a></p>
            </div>
        </form>
    </div>
</body>
</html>