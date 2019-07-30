<?php
	/* 
	 * 
	 * a base de dados foi criada pelo root@localhost com o nome de COLMEIA
	 * o root criou o usuario lpqbd@localhost o mesmo em acesso a base dedadeos
	 * sendo leitura escrita e edicao
	 * 
	 * CREATE TABLE DEVICE( ID NUMERIC(4, 0) NOT NULL, NOME CHAR(25), DESCRICAO CHAR(50),  IMG VARCHAR(1024), PRIMARY KEY (ID));
	 * CREATE TABLE COMANDO( ID NUMERIC(4, 0) NOT NULL, CMD CHAR(25) NOT NULL, DESCRICAO CHAR(50), PRIMARY KEY (ID));
	 * 
	*/

	$servername	= "localhost";
	$username	= "lp1bd";
	$password	= "12345";
	$dbname		= "COLMEIA";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	/*if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully". "<br>";*/
?>

