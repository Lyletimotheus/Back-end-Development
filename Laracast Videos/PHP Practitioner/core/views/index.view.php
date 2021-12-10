<?php require('partials/head.php'); ?>
    <h1>Submit your name</h1>

    <form action="/names" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

    <?php foreach ($users as $user) : ?>
        <ul>
            <li>Name: <?= $user->name; ?></li>
        </ul>
    <?php endforeach; ?>
<?php require('partials/footer.php'); ?>