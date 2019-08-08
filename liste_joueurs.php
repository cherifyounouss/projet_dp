<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="refresh" content="1"> -->
	<title>Gestion des joueurs</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php 
		require_once 'includes/entete.php'; 
		require_once 'includes/menu.php'; 
	?>
	<div id="contenu">
		<?php if (!empty($joueurs)): ?>
			<?php foreach ($joueurs as $joueur): ?>
				<div class="fiche_joueur">
					<h1><a href="index.php?action=joueur&id=<?= $joueur->id ?>"><?= $joueur->prenom. ' ' .$joueur->nom ?></a></h1>
					<h2><a href="index.php?action=profil&id=<?= $joueur->profil ?>"><?= $joueur->profil_str() ?></a></h2>
					<p><?= substr($joueur->description, 0, 300) . '...' ?></p>
				</div>
			<?php endforeach ?>
		<?php else: ?>
			<div class="message">Aucun joueur trouvé</div>
		<?php endif ?>
	</div>
</body>
</html>