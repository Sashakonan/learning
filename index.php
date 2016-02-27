<?php

include "handler.php"

?>

<html>
<head>
</head>
<body>
<form method="post">
    <input type="text" name="a" value="<?= $_REQUEST['a'] ?>">
    <select name="operation">
        <?php foreach (array('+', '-', '*', '/','^','%') as $value) { ?>
            <option <?= $_REQUEST['operation'] == $value ? 'selected="selected"' : '' ?>
                value="<?= $value ?>"><?= $value ?></option>
        <?php } ?>
    </select>
    <input type="text" name="b" value="<?= $_REQUEST['b'] ?>">
    <span>=</span>
    <span><?= $result ?></span>
    <button name="calc" value="1" type="submit">OK</button>
</form>
</body>
</html>