<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
    
    <section>
        <div class="form-box2">
            <div class="form-value">
            <form action="">
            <h1>Registration Form</h1>
        <div class="cont2">
        <ion-icon name="person-outline"></ion-icon>
            <label for="fname">First Name</label>
            <input type="text"  name="fname" placeholder="enter your first name" required>
        </div>
        <div class="cont2">
        <ion-icon name="person-outline"></ion-icon>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" placeholder="enter your last name" required>
        </div>
        <div class="cont2">
        <ion-icon name="mail-outline"></ion-icon>
            <label for="email">Email <Address></Address></label>
            <input type="email"  name="email" placeholder="enter your email address" required>
        </div>
        <div class="cont2">
        <ion-icon name="call-outline"></ion-icon>
            <label for="pnumber">Phonenumber</label>
            <input type="text" name="pnumber" placeholder="enter your phone number" required>
        </div>
        <div class="cont2">
        <ion-icon name="accessibility-outline"></ion-icon>
            <label for="number">ID number</label>
            <input type="text" name="number" placeholder="enter your national ID number" required>
        </div>
        <div class="cont2">
        <ion-icon name="lock-closed-outline"></ion-icon>
            <label for="pass">password</label>
            <input type="password" name="password" placeholder="enter your password" required>
        </div>
        <div class="cont2">
        <ion-icon name="lock-closed-outline"></ion-icon>
            <label for="cpass">Confirm Password</label>
            <input type="password" name="cpass" placeholder="confirm your password" required>
        </div>
        <div class="register">
            <p>Already created an account? <a href="login.php">Login</a></p>
        </div>
        <button type="submit">Register</button>
    </form>
            
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>