<?php
	require_once 'data_access/Joueur.php';
	require_once 'data_access/Profil.php';
	require_once 'data_access/dao/FabriqueDAO.php';
	//require_once 'data_access/dao/EntityManager.php';
	//require_once 'data_access/dao/JoueurManager.php';
	//require_once 'data_access/dao/ProfilManager.php';

	$joueurManager = FabriqueDAO::getDAOInstance('joueur');
	$profilManager = FabriqueDAO::getDAOInstance('profil');
	$profils = $profilManager->getList();

	if (!isset($_GET['action']))
	{
		$joueurs = $joueurManager->getList();
		$profils = $profilManager->getList();
		require_once 'includes/liste_joueurs.php';
	}
	else
	{
		if (strtolower($_GET['action']) === 'joueur')
		{
			if (isset($_GET['id']) && is_numeric($_GET['id']))
			{
				$joueur = $joueurManager->getById($_GET['id']);
				require_once 'includes/afficher_joueur.php';
			}
			else
			{
				require_once 'includes/erreur.php';
			}
		}
		else if (strtolower($_GET['action']) === 'profil')
		{
			if (isset($_GET['id']) && is_numeric($_GET['id']))
			{
				$joueurs = $joueurManager->getByProfilId($_GET['id']);
				require_once 'includes/liste_joueurs.php';
			}
			else
			{
				require_once 'includes/erreur.php';
			}
		}
		else
		{
			require_once 'includes/erreur.php';
		}
	}
?>