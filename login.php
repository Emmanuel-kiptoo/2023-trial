<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h1>Login Form</h1>
                    <div class="cont">
                    <ion-icon name="mail-outline"></ion-icon>
                        <label for="">Email</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="cont">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                        <label for="">Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <a href="#">Forgot password</a></label>
                        
                    </div>
                    <button type="submit">Login</button>  
                    <div class="register">
                    <p>Don't have an account? <a href="signup.php">Register</a></p>
                    </div>                  
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>