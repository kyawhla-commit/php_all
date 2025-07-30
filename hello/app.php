<?php
$mode = "light"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php test</title>
</head>
<body>
    <h1>PHP</h1>
    <?php if($mode == "light"): ?>
        <div class="" style="padding:20px; background:#ddd; color:black;">
            Light Mode
        </div>
    <?php else: ?>
        <div style="padding: 20px; background: #333; color: white;">
            Dark Mode
        </div>
    <?php endif ?>
</body>
</html>