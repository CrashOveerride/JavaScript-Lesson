<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title><?= $config['name'] ?></title>
   <link rel="shortcut icon" href="img/logo.png">

   <!-- Генерация CSS LINK через PHP -->
   <?php foreach ($config['assets']['css'] as $file) : ?>
        <link rel="stylesheet" href="<?= $file ?>">
   <?php endforeach ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><?= $config['name'] ?></a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/calculate.php">Calculate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/feedback.php">Feedback</a>
            </li>           
        </ul>
    </div>
</nav>

<br>

<?= $content ?>

<!-- Генерация JS LINK через PHP -->
<?php foreach ($config['assets']['js'] as $file) : ?>
    <script src="<?= $file ?>"></script>
<?php endforeach; ?>

</body>
</html>