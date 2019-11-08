<?php
class DbManager
{
	protected $connections = array();

	public function connect($name, $params)
	{
		$params = array_merge(array(
			'dsn' => null,
			'user' => 'roots',
			'password' => '',
			'options' => array(),
		), $params);

		$con = new PDO(
			$params['dsn'],
			$params['user'],
			$params['password'],
			$params['options']
		);

		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		$this->connections[$name] = $con;
	}

	public function getConnection($name = null)
	{
		if(is_null($name)){
			return current($this->connections);
		}

		return $this->connections[$name];
	}

	public function setResponsitoryConnectionMap($repository_name, $name)
	{
		$this->repository_connection_map[$repository_name] = $name;
	}

	public function getConnectionForRepository($repository_name)
	{
		if(isset($this->repository_connection_map[$repository_name])){
			$name = $this->repository_connection_map[$rrepository_name];
			$con = $this->getConnection($name);
		}else{
			$con = $this->getConnection();
		}

	return $con;
	}

}


?>