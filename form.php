<?php
require("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="script.php" method="POST">
    <label for="name">Nom: </label>
    <input type="text" name="name"><br>
    <label for="firstname">Prénom: </label>
    <input type="text" name="firstname"><br>
    <label for="email">Mail: </label>
    <input type="email" name="email"><br>
    <label for="password">Mot de Passe: </label>
    <input type="password" name="password"><br>
    <input type="submit" ><br>
  </form>
</body>
</html>
