<?php

include "handler.php"

?>
<html>
<head>
</head>
<body>
<form method="post">
    <label>
        <input type="text" name="speedLimiter"
               value="<?= isset($_REQUEST['speedLimiter']) ? $_REQUEST['speedLimiter'] : '' ?>">
        <input type="text" name="speed" value="<?= isset($_REQUEST['speed']) ? $_REQUEST['speed'] : '' ?>">
    </label>
    <span><?= $result ?></span>
    <button type="submit" name="policeman" value="1">OK</button>

</form>
</body>
</html>
