<div class="language-selection">
    <h1>Read this book in:</h1>

    <ul class="language-list">
    <?php foreach ($this->languages as $langCode=>$langTitle): ?>
        <li>
            <a href="<?= $langCode . '/toc.html' ?>"><?= $langTitle ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</div>    