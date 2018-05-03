<?php
/**
 * inserts this Senator into mySQL
 *
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 **/
public function insert(\PDO $pdo) : void {

	// create query template
	$query = "INSERT INTO senator(senatorId, senatorName, senatorNumLives) VALUES(:senatorId, :senatorName, :senatorNumLives)";
	$statement = $pdo->prepare($query);

	// bind the member variables to the place holders in the template
	$parameters = ["senatorId" => $this->senatorId->getBytes(), "senatorName" => $this->senatorName->getBytes(), "senatorNumLives" => $this->senatorNumLives];
	$statement->execute($parameters);
}
