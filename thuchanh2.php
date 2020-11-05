<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height: 180px; width: 230px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }
    .login input {
        padding: 5px;
        margin: 5px;
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="username" />
        <input type="text" name="password" size="30" placeholder="password" />
        <input type="submit" value="Sign in" />
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin") {
        echo "<h1>Welcome <span style='color: aqua'>" .$username. "</span> to website</h1>";
    } else {
        echo "<h1><span style='color: blue'>Login Error</span></h1>";
    }
}
?>
</body>
</html>
