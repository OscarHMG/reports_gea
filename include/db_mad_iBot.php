
<?php
/**
 * Functions to create operations with DB
 */


/**
 * Parsea el query para armar el query con los queries.
 * @return Query listo a ejecutarse.
 */
function db_queryParse(&$query, $args) {
    foreach ($args as &$arg) {
        $query = str_replace($arg[0], $arg[1], $query);
    }
}

/**
 * Obtiene la conexion a la base de datos del iBot
 * @return $conn Conector por defecto con la base de WEB GUI.
 */
function db_MAD_iBot_connect(){
	$servername = BDD_SERVER;
	$username = BDD_USER_NAME;
	$password = BDD_PASSWORD;

	try{
	    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
	    return $conn;
	}catch(PDOException $error){
		error_log($error->getMessage());
		return $error->getMessage();
	}
}