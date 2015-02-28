<?php
require_once './functions.php';
//var_dump($_GET);die;
$func = new functions();
$cont = $func->select($_GET['id']);
//var_dump($cont['id']);die;
?>
<html  remont>

    <head>
        <link rel="stylesheet" href="css/style.css">

        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />

        <title>Форма редактирования</title>

        <style type="text/css">
            <!--
            body { font: 12px Georgia; color: #666666; }
            h3 { font-size: 16px; text-align: center; }
            table { width: 450px; border-collapse: collapse; margin: 0px auto; background: #E6E6E6; }
            td { padding: 3px; }
            input { width: 250px; border: solid 1px #CCCCCC; }
            textarea { width: 250px; height: 100px; border: solid 1px #CCCCCC; }
            .buttons { width: auto; border: double 1px #666666; background: #D6D6D6; }
            -->
        </style>

    </head>

    <body>

        <form action="updater.php"  method="post" name="remont">
            <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="2" align="center"><strong>Редактирование элемента   </strong></td>
                </tr>


                <tr>
                    <td width="150">Id :</td>
                    <td>
                        <input type="text" name="id" value="<?php echo $cont['id'] ?>" readonly="on" >
                    </td>


                </tr>



                <tr>
                    <td width="150">Позиция :</td>
                    <td>
                        <select size="1" name="pos" style="width:100px;" >
                            <option value='1' <?php if($cont['position']=='1') echo 'selected';?> >1</option>
                            <option value='2'<?php if($cont['position']=='2') echo 'selected';?>>2</option>
                            <option value='3' <?php if($cont['position']=='3') echo 'selected';?>>3</option>
                        </select>
                    </td>


                </tr>

                <tr>
                    <td width="150">Название :</td>
                    <td><input type="text" name="header" maxlength="30" value="<?php echo $cont['header'] ?>" ></td>
                </tr>

                <tr>
                    <td width="150">Текст :</td><br/>
                    <td><textarea name="text"><?php echo $cont['text']; ?></textarea></td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" class="buttons" value="Сохранить" />
                    </td>
                </tr>

            </table>
        </form>

    </body>
</html>
