<?php
require "authentication.inc";
require "db.php";

session_start();

// Connect to an authenticated session or relocate to logout.php
sessionAuthenticate();

if (!$connection = @ mysql_connect("localhost", $username, $password))
  die("Cannot connect");

// Clean the data collected from the user
$newuser = mysqlclean($_POST, "newuser", 50, $connection);
$newPassword1 = mysqlclean($_POST, "newPassword1", 10, $connection);
$newPassword2 = mysqlclean($_POST, "newPassword2", 10, $connection);

if (!mysql_selectdb($databaseName, $connection))
  showerror();

  // Create the digest of the password
  $digest = md5(trim($newPassword1));

  $passwd = md5("$newpassword1");

  // Update the user row
$update_query = "INSERT INTO users (user_name, password) VALUES ('$newuser','$passwd')";


  if (!$result = @ mysql_query ($update_query, $connection))
    showerror();

// Relocate to the password form
header("Location: newuser.php");
?>

