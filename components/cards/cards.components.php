<?php
function renderCard($title, $image, $rating = null, $release_date = null) {
    echo '<div class="card">';
    echo '<img src="/assets/img/' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($title) . '">';
    echo '<div class="card-title">' . htmlspecialchars($title) . '</div>';
    if ($rating !== null) {
        echo '<div class="card-rating">Rating: ' . htmlspecialchars($rating) . '</div>';
    }
    if ($release_date !== null) {
        echo '<div class="card-release">Release Date: ' . htmlspecialchars($release_date) . '</div>';
    }
    echo '</div>';
    
}
?>