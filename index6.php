<?php

include "handler.php"

?>
<html>
<head>
</head>
<body>
<form method="post" style="color: brown">
    <label>
        <input type="text" name="a" value="<?= isset($_REQUEST['a']) ? $_REQUEST['a'] : '' ?>" style="color: brown">
        <input type="text" name="b" value="<?= isset($_REQUEST['b']) ? $_REQUEST['b'] : '' ?>">
    </label>
    <span><?= $result ?></span>
    <button type="submit" name="MIN" value="1">OK</button>

</form>
</body>
</html>
