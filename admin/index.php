<?php 
require_once './connect.php';

//var_dump($_POST);die;
if (isset($_POST['login']) and isset($_POST['password'])) {
    $username = $_POST['login'];
    $pass = $_POST['pass'];


    $q = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysql_query($q);
//    var_dump($result);die;
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

        $md_pass = md5($pass);
        if ($row['pass'] === $md_pass) {
            session_start();
            $_SESSION['login'] = $username;
            $_SESSION['pass'] = md5($pass);
//            var_dump($_SESSION);die;
            header("Location: admin.php");
            exit;
        }
    }
}
if (isset($_SESSION['login'])) return;
else {
?>
<!DOCTYPE html>

<html > 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Вход в админку сайта</title>
        <link rel="stylesheet" href="css/style.css">
        <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>

        
        <!--/ vladmaxi top bar -->

        <form method="post"  class="login">
            <p>
                <label for="login">Логин:</label>
                <input type="text" name="login" id="login" >
            </p>

            <p>
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" >
            </p>

            <p class="login-submit">
                <button type="submit" class="login-button">Войти</button>
            </p>

        </form>
    </body>
</html>

<?php } ?>
