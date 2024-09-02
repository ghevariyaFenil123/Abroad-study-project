<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/signup.css" />
    <title>Sign in & Sign up</title>
</head>

<body>
    <?php
    require_once "connection.php";
    /*registration */
    $username = $password = $email = "";
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    if (isset($_POST["signup"])) {

        $sql = "select Name from tbllogin where Name=?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $params_username);
            $params_username = $_POST["username"];
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    echo "<script>alert('Username was already taken!!')</script>";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Something went wrong";
            }
        }
        mysqli_stmt_close($stmt);
        if ($username) {
            $password = trim($_POST["password"]);
            $email = trim($_POST['email']);
            $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT Email from tbllogin where Email='$email'"));
            if ($password != $_POST["cpassword"]) {
                echo "<script>alert('Password not matched!!')</script>";
            } elseif ($check_email) {
                echo "<script>alert('Email Alredy Exists in database!!')</script>";
            } else {

                $password = password_hash($password, PASSWORD_DEFAULT);
                mysqli_query($conn, "Insert into tbllogin values('$username','$email','$password')");
                echo "<script>alert('Inserted successfully'); window.location.href='signup.php';</script>";
            }
        }
    }/*log in */
        if(isset($_POST["login"])){
        $USERNAME = $PASSWORD = "";
        $USERNAME = trim($_POST["USERNAME"]);
        $PASSWORD = trim($_POST["PASSWORD"]);

        $res = mysqli_query($conn, "select * from tbllogin where Name='$USERNAME'");
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $verify = password_verify($PASSWORD, $row['Password']);
            if ($verify == 1) {

                $_SESSION['log_user']=$USERNAME;
                echo "<script>alert('Successfully login'); window.location.href='index.php';</script>";
                
                //header('location:home.php');
            }
        }

        }
    
    ?>
    <div id="preloader"></div>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form  method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="USERNAME" placeholder="USERNAME" id="" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="PASSWORD" placeholder="PASSWORD" id="" required />
                    </div>
                    <input type="submit" name="login" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="#" method="post" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username"
                            value="<?php echo $_POST["username"]; ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" value="<?php echo $_POST["email"]; ?>"
                            required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password"
                            value="<?php echo $_POST["password"]; ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="cpassword" placeholder="Confirm Password"
                            value="<?php echo $_POST["cpassword"]; ?>" required />
                    </div>
                    <input type="submit" class="btn" name="signup" value="Sign up" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="images/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="images/register.svg" class="image" alt="" />
            </div>
        </div>
        
    </div>

    <script src="scripts/main.js"></script>
    <script>
         var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })

    </script>
</body>

</html>