<?php 
require BASE_PATH . '/utils/Output.utils.php';

require_once BASE_PATH . '/components/cards/cards.components.php';
require_once BASE_PATH . '/handlers/pageData.handlers.php';
require_once BASE_PATH . '/components/templates/head.components.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>

</head>
<body>
    <section>
    <h2>Series</h2>
    <?php
    AllSeries($dramaList);
    ?>
</section>
</body>
</html>