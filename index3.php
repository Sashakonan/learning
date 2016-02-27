<?php

include "handler.php"

?>
<html>
<head>
</head>
<body>
<form method="post">
    <label>
        <input type="text" name="a" value="<?= isset($_REQUEST['a']) ? $_REQUEST['a'] : '' ?>">
    </label>
    <label>
        <input type="text" name="b" value="<?= isset($_REQUEST['b']) ? $_REQUEST['b'] : '' ?>">
    </label>
    <label>
        <input type="text" name="h" value="<?= isset($_REQUEST['h']) ? $_REQUEST['h'] : '' ?>">
    </label>
    <span><?= $result ?></span>
    <button type="submit" name="trap" value="1">OK</button>

</form>
</body>
</html>
