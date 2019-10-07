<?php

abstract class DbRepository
{
	protected $con;

	public function __construct($con)
	{
		$this->setConnection($con);
	}

	public function setConnection($con)
	{
		$this->$con;
	}

	public function excute($sql, $params = array())
	{
		$stmt = $this->con->prepare($sql);
		$stmt->execute($params);

		return $stmt;
	}

	public function fetch($sql, $params = array())
	{
		return $this->excute($sql, $params)->fetch(PDO::FETCH_ASSOC);
	}

	public function fetchAll($sql, $params = array())
	{
		return $this->excute($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>