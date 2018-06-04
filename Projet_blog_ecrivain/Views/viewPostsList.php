<?php
$title = 'Liste des derniers posts';
ob_start();
while ($data = $posts->fetch()) {
    ?>

    <article class="article">
        <h3><?= htmlspecialchars($data['title'])?> <em> Le : <?= $data['creation_date_fr']?></em></h3>
        <p><?= nl2br(htmlspecialchars(substr($data['content'],0,400)))?>...<a href="#">Lire la suite</a></p>
    </article>
    <?php
}
$content = ob_get_clean();
require 'template.php';