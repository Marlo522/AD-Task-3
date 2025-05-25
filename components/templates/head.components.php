<?php
require_once BASE_PATH . '/handlers/pageData.handlers.php';
?>
<!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container justify-content-center">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <?php foreach ($navList as $navItem): ?>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="<?= htmlspecialchars($navItem['url']) ?>">
                            <?= htmlspecialchars($navItem['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</header>