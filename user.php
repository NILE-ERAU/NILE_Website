<?php
/* Include the database connection script. */
include 'config.php';
/* Username. */
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
  $res = $link->prepare($query);
  $res->execute($values);
}
catch (PDOException $e)
{
  /* Query error. */
  echo 'Query error.';
  die();
}
?>
