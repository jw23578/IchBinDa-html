<?php

$token = $_GET['token'];
if (!file_exists("/home/jw78/decodeToken/" . $token))
{
  echo "Das Token ist ungültig die Nachrichten werden nicht dekodiert. Für ein gültiges Token kontaktieren Sie bitte datenabfrage@app-ichbinde.de";
}
$ciphermessage = $_POST['message'];

echo "hello" . rand() . $_GET['token'] . $ciphermessage;

?>
