<?php
require_once './connect.php';
class functions {

    public function select($id) {
        $query = "SELECT * FROM content WHERE id=$id LIMIT 1";
        $result = mysql_query($query);
        return mysql_fetch_array($result);
    }

    function insert() {
        if (isset($_GET[`insert`])) {
            $query = "INSERT INTO content (header,text, position) VALUES (`$_POST[tema]`,`$_POST[text]`)";
            mysql_query($query);
        }
    }

    public function update($header, $text, $position, $id) {
        //Корректировка
            $query = "UPDATE content SET `header`='$header',`text`='$text', `position`='$position'  WHERE `id`='$id'";
            $result = mysql_query($query);
            return mysql_fetch_array($result);
            }

}
