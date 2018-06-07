<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<nav class="navbar">
    <p class="welcomeUser"> <?php if (isset($_SESSION['user'])) {
            echo "Bienvenue " . $_SESSION['user'];
        } ?></p>
    <ul class="navbar-menu">
        <?php if (isset($_SESSION['user']) && ($_SESSION['user'] == 'admin')) {
            echo '<li><a href="index.php?action=admin">Administration</a></li>';
        } ?>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="index.php?action=posts">Articles</a></li>
        <li><?php if (isset($_SESSION['user'])) {
                echo '<a href="index.php?action=deconnect">Déconnection</a>';
            } else {
                echo '<a href="index.php?action=connect">Connection</a>';
            } ?></li>
    </ul>
</nav>
<?= $content ?>
<script src="public/plugins/tinymce/tinymce.min.js"></script>
<script src="public/js/init_tinymce.js" type="text/javascript"></script>
</body>
</html>