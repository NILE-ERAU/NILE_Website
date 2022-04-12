<?php
/* Include the database connection script. */
include 'config.php';
/* Username. */
$username = 'NILE';
/* Password. */
$password = 'mache123';
/* Secure password hash. */
$hash = password_hash($password, PASSWORD_DEFAULT);

$role = 'admin'
/* Execute the query. */
$sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
if($stmt = mysqli_prepare($link, $sql)){
  // Bind variables to the prepared statement as parameters
  mysqli_stmt_bind_param($stmt, "sss", $username, $hash, $role);
  if(mysqli_stmt_execute($stmt)){
      // Redirect to login page
  } else{
      echo "Oops! Something went wrong. Please try again later.";
  }

  // Close statement
  mysqli_stmt_close($stmt);
  }

?>
