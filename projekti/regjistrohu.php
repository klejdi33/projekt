<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regjistrohu</title>
    <style>
        
        body {
    font-family: "Open Sans", sans-serif;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)),
      url("https://turizmineshqiperihome.files.wordpress.com/2019/05/shk.jpg");
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;}
    nav a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

   

   

  </style>
    </style>
</head>
<body>
<nav>
      <div class="nav__logo"><a href="regjistrohu.php">Regjistrohu</a></div>
      <ul class="nav__links">
        <li=class ><a href="2222.php">Home</li>
        <li=class ><a href="Untitled-1.php">Reth nesh</li>
        <li=class ><a hred="kontakt.php">Kontakt</li>
       
      </ul>
     

<body>

<div class="container">
    <h2>Login</h2>
    
    <?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        header("Location: dashboard.php");
        exit();
    }

   
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
      
        $validUsername = 'user';
        $validPassword = 'password';

        $enteredUsername = isset($_POST['username']) ? $_POST['username'] : '';
        $enteredPassword = isset($_POST['password']) ? $_POST['password'] : '';

        if ($enteredUsername == $validUsername && $enteredPassword == $validPassword) {
        
            $_SESSION['user_id'] = 1; 

         
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid username or password";
        }
    }
    ?>

    <?php if (isset($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
<div align="center">
    <div class="login-form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
           <label for="username">Email:</label>
            <input type="text" id="username" name="username" required>

       <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>
    </div>
</div>

</body>
</html>



