<?php
require_once BASE_PATH . '/components/cards/cards.components.php';

function AllSeries($series){
    echo '<div class="for-you-grid">';
    foreach ($series as $genre => $shows) {
        foreach ($shows as $show) {
            // Add data-genres attribute for filtering
            echo '<div class="series-card" data-genres="' . htmlspecialchars($genre) . '">';
            renderCard(
                $show['title'],
                $show['image'],
                $show['rating'] ?? null,
                $show['release_date'] ?? null
            );
            echo '</div>';
        }
    }
    echo '</div>';
}
