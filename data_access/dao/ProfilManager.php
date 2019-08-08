<?php
	/**
	 * Classe de gestion des accès aux articles
	 */
	class ProfilManager extends EntityManager
	{
		function __construct()
		{
			parent::__construct();
		}

		public function getList($table='Profil')
		{
			return parent::getList($table);
		}

		public function getById($id, $table='Profil')
		{
			return parent::getById($id, $table);
		}
	}
?>