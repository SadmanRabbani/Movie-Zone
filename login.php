<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin or Register</title>
    <link rel="stylesheet" href="login & register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <header>
        <a href="Index.php" class="logo">
            <i class='bx bxs-movie'></i>Home
        </a>
    </header>

    <!-- Register-->

    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form action="Register.php" method="post">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="First_Name" id="First_Name" placeholder="First Name" required>
                <label for="First_Name">First Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="Last_Name" id="Last_Name" placeholder="Last Name" required>
                <label for="Last_Name">Last Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="Email" id="Email" placeholder="Email" required>
                <label for="Email">Email</label>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="Password" id="Password" placeholder="Password" required>
                <label for="Password">Password</label>
            </div>

            <input type="submit" class="btn" value="Sign Up" name="SignUp">
        </form>

        <p class="or">
            -------------- or --------------
        </p>

        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>

        <div class="links">
            <p>
                Already Have Account?
            </p>

            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <!-- Sign In-->

    <div class="container" id="signIn">
        <h1 class="form-title">Login</h1>
        <form action="" method="post">

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="Email" id="Email" placeholder="Email" required>
                <label for="Email">Email</label>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="Password" id="Password" placeholder="Password" required>
                <label for="Password">Password</label>
            </div>

            <p class="recover">
                <a href="#">Recover Password?</a>
            </p>

            <input type="submit" class="btn" value="Sign In" name="Signin">
        </form>

        <p class="or">
            -------------- or --------------
        </p>

        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>

        <div class="links">
            <p>
                Don't Have Account Yet?
            </p>

            <button id="signUpButton">Sign Up</button>
        </div>
    </div>


    <!--    Applying JS for Sign In & Sign Up   -->

    <script src="script.js"></script>

</body>

</html>