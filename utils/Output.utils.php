<?php
require_once BASE_PATH . '/components/cards/cards.components.php';

function capitalizeWords($string) {
    return ucwords(strtolower($string));
}

function formatNumberDecimal($number, $decimals = 2) {
    return number_format($number, $decimals);
}

function formatDate($date) {
    $timestamp = strtotime($date);
    if ($timestamp === false) return $date;
    return date('F j, Y', $timestamp);
}

function AllSeries($series){
    echo '<div class="for-you-grid">';
    foreach ($series as $genre => $shows) {
        foreach ($shows as $show) {
            // Add data-genres attribute for filtering
            echo '<div class="series-card" data-genres="' . htmlspecialchars($genre) . '">';
            $formattedTitle = isset($show['title']) ? capitalizeWords($show['title']) : '';
            $formattedRating = isset($show['rating']) ? formatNumberDecimal($show['rating']) : null;
            $formattedDate = isset($show['release_date']) ? formatDate($show['release_date']) : null;
            renderCard(
                $formattedTitle,
                $show['image'],
                $formattedRating,
                $formattedDate
            );
            echo '</div>';
        }
    }
    echo '</div>';
}
