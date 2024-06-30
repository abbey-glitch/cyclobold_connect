
<!-- index.php inside src/Views/ folder -->

<!-- HTML content for the home page -->
<h1>Welcome to Simple PHP MVC Sample!</h1>

<ul>
    <?php foreach ($journals as $journal) : ?>
        <!-- Display journal name and published year -->
        <li><?= $journal->name ?> (<?= $journal->publishedYear ?>)</li>
    <?php endforeach; ?>
</ul>