<?php
require("db.php");

$name = htmlspecialchars($_POST["name"]);
$firstname = htmlspecialchars($_POST["firstname"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

$hash = password_hash($password, PASSWORD_DEFAULT);

$requete = $db->prepare("insert into user (user_name, user_firstname, user_email, user_password) values (?, ?, ?, ?)");
$requete->execute(array($name, $firstname, $email, $hash));

if(password_verify($password, $hash)) {
    session_start();
    echo "VICTORY!!!";
} else{
  header('Location: form.php');
  echo "EPIC FAILL!!!";
}







// if ($login=="admin" && $password=="admin") {
//     $_SESSION["auth"]="ok";
//     header("Location: liste.php");
// }
// else {
//     unset($_SESSION["auth"]);
//     header("Location: form.php");
//
// }
