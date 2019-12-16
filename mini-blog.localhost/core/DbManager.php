<?php
class DbManager
{
	protected $connections = array();
<<<<<<< HEAD
	protected $repository_connection_map = array();
    protected $repositories = array();
=======
>>>>>>> cf148875bdaeb86a659d7cb7223b443e87fa41ce

	public function connect($name, $params)
	{
		$params = array_merge(array(
			'dsn' => null,
<<<<<<< HEAD
			'user' => 'yoshimoto',
			'password' => 'pan64xiw',
=======
			'user' => '',
			'password' => '',
>>>>>>> cf148875bdaeb86a659d7cb7223b443e87fa41ce
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
<<<<<<< HEAD
			$name = $this->repository_connection_map[$repository_name];
=======
			$name = $this->repository_connection_map[$rrepository_name];
>>>>>>> cf148875bdaeb86a659d7cb7223b443e87fa41ce
			$con = $this->getConnection($name);
		}else{
			$con = $this->getConnection();
		}

	return $con;
	}

<<<<<<< HEAD
	public function get($repository_name)
    {
        if (!isset($this->repositories[$repository_name])) {
            $repository_class = $repository_name . 'Repository';
            $con = $this->getConnectionForRepository($repository_name);

            $repository = new $repository_class($con);

			$this->repositories[$repository_name] = $repository;
        }

        return $this->repositories[$repository_name];
	}

	public function __destruct()
    {
        foreach ($this->repositories as $repository) {
            unset($repository);
        }

        foreach ($this->connections as $con) {
            unset($con);
        }
    }

=======
>>>>>>> cf148875bdaeb86a659d7cb7223b443e87fa41ce
}


?>