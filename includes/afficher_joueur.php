<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Affichage d'un joueur</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php 
		require_once 'includes/entete.php'; 
		require_once 'includes/menu.php'; 
	?>
	<?php if (!empty($joueur)): ?>
		<div id="contenu">
			<div class="fiche_joueur">
				<h1><?= $joueur->prenom.' '. $joueur->nom ?></h1>
				<h2><a href="index.php?action=profil&id=<?= $joueur->profil ?>"><?= $joueur->profil_str() ?></a></h2>
				<h3>Convoqué le <?= date('d/m/Y à H\hi\m\n', strtotime($joueur->dateCreation)) ?></h3>
				<p><?= $joueur->description ?></p>
			</div>
		</div>
	<?php else: ?>
		<div class="message">Le joueur demandé n'existe pas</div>
	<?php endif ?>
</body>
</html>