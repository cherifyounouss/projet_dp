<?php
	/**
	 * Classe métier représentant un article
	 */
	class Joueur
	{
		public $id;
		public $nom;
		public $prenom;
		public $profil;
		public $dateCreation;
		public $dateModification;

		public function profil_str()
		{
			switch ($this->profil)
			{
				case 1:
					return 'Gardien';
				case 2:
					return 'Défenseur';
				case 3:
					return 'Milieu';
				case 4:
					return 'Attaquant';
				default:
					return 'Unknown';
			}
		}
	}
?>