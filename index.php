<?php 
require BASE_PATH . '/utils/Output.utils.php';

require_once BASE_PATH . '/handlers/pageData.handlers.php';
require_once BASE_PATH . '/components/templates/head.components.php';
require BASE_PATH . '/components/carousel/carousel.components.php';
require_once BASE_PATH . '/components/cards/cards.components.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container my-5">
        <h2 class="mb-5">For You</h2>
        <?php AllSeries($dramaList); ?>
    </div>
</body>
</html>