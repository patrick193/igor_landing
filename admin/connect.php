<?php
require_once './conf.php';

$db = mysql_connect(HOST, USER, PASS) or die("Could not connect: " . mysql_error());
mysql_select_db(DATABASE) or die("Could not select database");
mysql_query("set names 'utf8'",$db);