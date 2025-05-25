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
    <title>Mfdfds</title>

    <style>
.card {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 16px;
    margin: 12px;
    width: 220px;
    display: inline-block;
    vertical-align: top;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    text-align: center;
}
.card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 6px;
}
.card-title {
    font-weight: bold;
    margin: 10px 0 5px 0;
    font-size: 1.1em;
}
.card-rating, .card-release {
    font-size: 0.95em;
    color: #555;
    margin: 2px 0;
}
.for-you-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    justify-content: flex-start;
}
.series-card {
    flex: 0 0 auto;
}
.for-you-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    justify-content: center; /* Center the cards horizontally */
}
.series-card {
    flex: 0 0 auto;
}
</style>
    
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