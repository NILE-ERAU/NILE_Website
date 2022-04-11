<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Trolley123!');
define('DB_NAME', 'NILE');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = 'NILE';
/* Password. */
$password = 'mache123';
/* Secure password hash. */
$hash = password_hash($password, PASSWORD_DEFAULT);
/* Insert query template. */
$query = 'INSERT INTO system_info (id, username, password) VALUES (1, :name, :passwd)';
/* Values array for PDO. */
$values = [1, ':name' => $username, ':passwd' => $hash];
/* Execute the query. */
try
{
  $res = $pdo->prepare($query);
  $res->execute($values);
}
catch (PDOException $e)
{
  /* Query error. */
  echo 'Query error.';
  die();
}

?>
