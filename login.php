<!DOCTYPE html>

<html>
    <head>
        <title>
            Hostel Management System
        </title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>

    <body style="font-family:times new";> 
        <form class = "form"  action="php/signin.php" method="POST">
            <h1>Sign In.</h1>
            <p>Please fill in your username and password to Login.</p>
            
            <label for="username">Username</label>
            <input type="text" placeholder="Enter your name" name="name" required>

            <label for="password"><br><br>Password</label>
            <input type="password" placeholder="Enter password" name="password"required>
            <br>
            <button class ="button button2" type="submit"  name="login"><span>Login</span></button>            
        </form>

        <h5>Not yet Registered? <a href="html/signUp.html" style="font-size: 15px;">signUp</a> </h5>
    </body>
</html>