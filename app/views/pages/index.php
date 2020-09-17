<?php require APP_ROOT . '/views/includes/header.php'; ?>

<h1><?php echo $data['title']; ?></h1>
<ul>
    <?php foreach ($posts as $post) : ?>
        <li><?php echo $post ?></li>
    <?php endforeach; ?>
</ul>
HOMEPAGE

<?php require APP_ROOT . '/views/includes/footer.php'; ?>