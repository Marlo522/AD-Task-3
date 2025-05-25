<?php foreach ($navList as $navItem): ?>
    <li class="nav-item">
        <a class="nav-link text-center" href="<?= htmlspecialchars($navItem['url']) ?>">
            <?= htmlspecialchars($navItem['label']) ?>
        </a>
    </li>
<?php endforeach; ?>