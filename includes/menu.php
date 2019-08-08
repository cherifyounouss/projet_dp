<?php
	$uri = $_SERVER['REQUEST_URI'];
	$queryString = $_SERVER['QUERY_STRING'];
?>
<div id="menu">
	<ul>
		<li><a href="index.php" <?= substr($uri, -9) === 'index.php' ? ' class="menu_actif"':'' ?>>Accueil</a></li>
		<?php foreach ($profils as $profil): ?>
			<li><a href="index.php?action=profil&id=<?= $profil->id ?>"  <?= !empty($queryString) && $queryString === 'action=profil&id='.$profil->id ? ' class="menu_actif"':'' ?>><?= $profil->libelle ?></a></li>
		<?php endforeach ?>
	</ul>
</div>