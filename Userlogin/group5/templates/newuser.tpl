<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Password Change</title>
</head>
<body>
  <h1>Add a new user</h1>
  {MESSAGE}
  <form method="POST" action="adduser.php">
  <table>
    <tr>
      <td>New username:</td>
      <td><input type="text" size="50" name="newuser"></td>
    </tr>
    <tr>
      <td>Enter your new password:</td>
      <td><input type="password" size="10" name="newPassword1"></td>
    </tr>
    <tr>
      <td>Re-enter your new password:</td>
      <td><input type="password" size="10" name="newPassword2"></td>
    </tr>
  </table>
  <p><input type="submit" value="Add user">
  </form>
  <p><a href="home.php">Home</a>
  <p><a href="logout.php">Logout</a>
</body>
</html>

