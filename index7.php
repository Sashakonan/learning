<?php

include "handler.php"

?>
<html>
<head>
</head>
<body>
<form method="post">
    <label>
        <select name="color"><!--имя в масиве $_REQUEST-->
            <?php foreach (array('Зеленый', 'Желтый', 'Красный') as $value) { ?><!--Проганяет option 3 раза-->
                <option <?= isset($_REQUEST ['color']) && $_REQUEST['color'] == $value ? 'selected="selected"' : '' ?>
                    value="<?= $value ?>"><?= $value ?></option><!--первый value- это атрибут-. а второе то что отображаеться->
            <?php } ?>
        </select>
    </label>
    <span><?= $result ?></span>
    <button type="submit" name="semafor" value="1">OK</button>

</form>
</body>
</html>
