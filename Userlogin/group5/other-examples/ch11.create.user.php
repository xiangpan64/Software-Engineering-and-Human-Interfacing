<?php
// This adds the user "hugh" with the password "dave" to the users table in 
// the authentication database

function newUser($connection, $username, $password)
{
  // Create the digest of the password
  $stored_password = md5(trim($password));

  // Insert the user row
  $query = "INSERT INTO users SET password = '$stored_password',
                                  user_name = '$username'";

  if (!$result = @ mysql_query ($query, $connection))
    showerror();
}

if (!($connection = @ mysql_connect("localhost", "hugh", "drum")))
   die("Could not connect to database");

if (!mysql_select_db("authentication", $connection))
   showerror();

newUser($connection, "hugh", "dave");

print "User hugh with password dave created.";

?>
