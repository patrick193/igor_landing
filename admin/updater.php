<?php
require_once './functions.php';
//var_dump($_POST);die;
$functions = new functions();
$header = $_POST['header'];
$text = $_POST['text'];
$position = $_POST['pos'];
$id = $_POST['id'];
$functions->update($header, $text, $position, $id);
header("Location:admin.php?edit=done");