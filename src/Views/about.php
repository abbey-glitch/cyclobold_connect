<h1>Welcome to Simple About MVC</h1>

<ul>
    <?php foreach ($journals as $journal) : ?>
        <!-- Display journal name and published year -->
        <li><?= $journal->name ?> (<?= $journal->publishedYear ?>)</li>
    <?php endforeach; ?>
</ul>