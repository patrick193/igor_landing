<?php

require_once './connect.php';

//var_dump($_POST);die;
if (isset($_POST['login']) and isset($_POST['password'])) {
    $username = $_POST['login'];
    $pass = $_POST['pass'];


    $q = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysql_query($q);
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

        $md_pass = md5($pass);
        if ($row['pass'] === $md_pass) {
            session_start();
            $_SESSION['login'] = $username;
            $_SESSION['pass'] = md5($pass);
//            var_dump($_SESSION);die;
            header("Location: admin.php");
        }
    }
}
