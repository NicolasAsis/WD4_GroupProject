
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Signup</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Siya css -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap');

        body {
            font-family: 'Quicksand';
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar ticky-top bg-light bg-white">
        <div class="s-nav-left-collapse-m s-nav-left-collapse-s s-nav-left s-nav-left-collapse-s-disappear">
            <a class="mr-3">Our work</a>
            <a class="mr-3">Species</a>
            <a class="mr-3">Places</a>
            <!-- <input class="s-input-icon s-searchbar mr-3" placeholder="Search"> -->
        </div>
        <div class="s-nav-left-collapse-m s-nav-left-collapse-s s-nav-left collapse navbar-collapse"
            id="navbarNavAltMarkup">
            <a class="mr-3">Our work</a>
            <a class="mr-3">Species</a>
            <a class="mr-3">Places</a>
            <!-- <input class="s-input-icon s-searchbar mr-3" placeholder="Search"> -->

            <div class="s-nav-right-collapse-m s-nav-right-collapse-s s-nav-right">
                <button class="s-btn s-btn-orange pl-3 pr-3 mr-2">Donate</button>
                <button class="s-btn s-btn-sorange pl-3 pr-3 mr-2">Adopt</button>
                <!-- <a href="login-signup.html" class=" mt-2 "><button class="s-btn-border pl-3 pr-3 mr-2 font-weight-bold">Login</button></a> -->
            </div>
        </div>
        <a href="./index.php"><img class="mr-5 s-logo-collapse-m s-logo-collapse-s" width="60px" src="imgs/logo-s.png"></a>
        <button class="navbar-toggler s-ham" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <img width="28px" src="imgs/icon-ham.png">
        </button>
        <div class="s-nav-right-collapse-m s-nav-right-collapse-s s-nav-right s-nav-right-collapse-s-disappear">
            <button class="s-btn s-btn-orange pl-3 pr-3 mr-2">Donate</button>
            <button class="s-btn s-btn-sorange pl-3 pr-3 mr-2">Adopt</button>
            <!-- <a href="login-signup.html" class="pl-3 pr-3"><button class="s-btn-border pl-3 pr-3  font-weight-bold">Login</button></a> -->
        </div>
    </nav>

    <!-- Login -->
    <div class="s-registration container">
        <div class="container s-login">
            <h2>Login</h2>
            <form method="POST">
                <div class="s-form-item">
                    <label>Username</label>
                    <input class="s-no-outline s-no-outline-registration " placeholder="Username" type="text" name="username" required>
                </div>
                <div class="s-form-item">
                    <label>Password</label>
                    <input class="s-no-outline s-no-outline-registration " placeholder="Password" text="text" name="password" required>
                </div>
                <div class="s-fc-gray" style="float: right;">No account ? Signup first</div>
                <button class="s-btn-full-reg s-btn-sorange s-btn-border s-fc-white" type="submit" name="login">Login</button>
            </form>
        </div>

    <!-- Signup Form -->
    <div class="container s-login">
        <h2>Sign Up</h2>
        <form method="POST">
            <div class="s-form-item">
                <label>Username</label>
                <input class="s-no-outline s-no-outline-registration " placeholder="Username" type="text" name="username" required>
            </div>
            <div class="s-form-item">
                <label>Password</label>
                <input class="s-no-outline s-no-outline-registration " placeholder="Password" type="text" name="password" required>
            </div>
            <div class="s-fc-gray" style="float: right; opacity: 0;">No account ? Signup first</div>
            <button class="s-btn s-btn-full-reg s-btn-sorange s-btn-border s-fc-white" type="submit" name="submit" >Signup</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
    include "./signup.php";
    include "./login.php";
