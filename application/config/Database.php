<?php

class Database {

	private $dbHost = "localhost";
	private $dbUser = "root";
	private $dbPass = "";
	private $dbName = "zabka";

	protected $statement;
	protected $error;

	protected function connect() {

		try {
			
			$dsn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
			$pdo = new PDO($dsn, $this->dbUser, $this->dbPass);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			return $pdo;
			
		} catch(PDOException $e) {

			print "Error!: " . $e->getMessage() . "<br/>";
			die();

		}

	}

	protected function query($sql) {

		$this->statement = $this->connect()->query($sql);

	}

	protected function prepare($sql) {

		$this->statement = $this->connect()->prepare($sql);
		
	}

	public function execute(array $param = null) : bool
	{
		return $this->statement->connect()->execute($param);
	}


	public function fetch(array $param = null) : mixed
	{
		$this->execute($param);
		return $this->statement->connect()->fetch();
	}


	public function fetchAll(array $param = null) : mixed
	{
		$this->execute($param);
		return $this->statement->connect()->fetchAll();
	}


	public function rowCount(array $param = null) : int
	{
		$this->execute($param);
		return $this->statement->connect()->rowCount();
	}
	

}
