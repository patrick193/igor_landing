<?php
require_once './connect.php';
//require_once './index.php';
//var_dump($_SESSION);
//die('asdas');
//if (!isset($_SESSION['login']))
//    {
$q = "SELECT * FROM content ";
$result = mysql_query($q);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Редактировать материал</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
        if (isset($_GET['edit'])) {
            echo 'Успешно отредактированно';
        } 
            ?>
            <table class="features-table">
                <thead>
                    <tr>
                        <td>Название</td>
                        <td class="grey">Текст</td>
                        <td class="grey" nowrap>Позиция</td>
                        <td class="green">Id</td>
                    </tr>
                </thead>



                <tbody>

    <?php
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        echo '<tr>';
        echo '<td class="grey"><a href="edit.php?edit&id=' . $row["id"] . '">' . $row['header'] . '</a></td>';
        echo '<td class="grey">' . $row['text'] . '</td>';
        echo '<td class="grey">' . $row['position'] . '</td>';
        echo '<td class="green">' . $row['id'] . '</td>';

        echo '</tr>';
    }
    ?>



                </tbody>
            </table>
        </body>
    </html>


<?php // } ?>

