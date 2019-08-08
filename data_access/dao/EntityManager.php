<?php
	/**
	 * Classe de base des DAO
	 */
	require_once 'ConnexionDB.php';

	abstract class EntityManager
	{
		// private $_host = 'localhost';
		// private $_user = 'root';
		// private $_password = '';
		// private $_database = 'gestion_joueurs';

		protected $bdd;
		
		function __construct()
		{
			// try {
			//  	$this->bdd = new PDO('mysql:host='.$this->_host.';dbname='.$this->_database.';charset=utf8', $this->_user, $this->_password);
			//  } catch (Exception $e) {
			//  	die("Erreur de connexion à la base de données : ".$e);
			//  }
			$this->bdd = ConnexionDB::getInstance();
		}

		protected function getList($table)
		{
			echo spl_object_id($this->bdd);
			$data = $this->bdd->query('SELECT * FROM '.$table);
			return $data->fetchAll(PDO::FETCH_CLASS, ucfirst($table));
		}

		protected function getById($id, $table)
		{
			echo spl_object_id($this->bdd);
			$data = $this->bdd->query('SELECT * FROM '.$table.' WHERE id = '.$id);
			$data->setFetchMode(PDO::FETCH_CLASS, ucfirst($table));
			return $data->fetch();
		}
	}
?>