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
    <span><?= $result ?></span>
    <button type="submit" name="pow" value="1">OK</button>

</form>
</body>
</html>