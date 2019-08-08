<?php
	/**
	 * Classe de gestion des accès aux articles
	 */
	class JoueurManager extends EntityManager
	{
		function __construct()
		{
			parent::__construct();
		}

		public function getList($table='Joueur')
		{
			return parent::getList($table);
		}

		public function getById($id, $table='Joueur')
		{
			return parent::getById($id, $table);
		}

		public function getByProfilId($id, $table='Joueur')
		{
			$data = $this->bdd->query('SELECT * FROM '.$table.' WHERE profil = '.$id);
			return $data->fetchAll(PDO::FETCH_CLASS, ucfirst($table));
		}
	}
?>