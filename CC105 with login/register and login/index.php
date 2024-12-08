<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<div class="container" id="signup" style="display: none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <input type="text" name="fName" placeholder="First Name" required>
        </div>

        <div class="input-group">
            <input type="text" name="lName" placeholder="Last Name" required>
        </div>

        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <input type="submit" class="btn" value="Sign Up">
    </form>

    <div class="links">
        <p>Already have an Account?</p>
        <button id="signInButton">Sign In</button>
    </div>
</div>

<div class="container" id="signin">
    <h1 class="form-title">Sign in</h1>
    <form method="post" action="login.php">
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <p class="recover"><a href="#">Recover Password!</a></p>
        <input type="submit" class="btn" value="Sign in">
    </form>

    

    <div class="links">
        <p>Don't have an Account?</p>
        <button id="signUpButton">Sign Up</button>
    </div>
</div>


   
<script src="script.js"></script>

</body>
</html>
