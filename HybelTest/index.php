<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h4>SIGN UP</h4>
<p>Don´t have an account yet? Sign up here</p>
<form action="./includes/signup.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username" required>
    <input type="password" name="pwd" placeholder="Password" required>
    <input type="password" name="pwdrepeat" placeholder="Repeat password" required>
    <input type="text" name="email" placeholder="E-mail" required>
    <br><br>
    <button type="submit" name="submit">SIGN UP</button>
</form>
<h4>LOGIN</h4>
<p>Don´t have an account yet? Sign up here</p>
<form action="includes/login.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdrepeat" placeholder="Repeat password">
    <input type="text" name="email" placeholder="E-mail">
    <br><br>
    <button type="submit" name="submit">LOGIN</button>
</form>




</body>
</html>