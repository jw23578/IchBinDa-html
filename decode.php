<?php

$token = $_GET['token'];
if (!file_exists("/home/jw78/decodeToken/" . $token))
{
  echo "Das Token ist ungültig die Nachrichten werden nicht dekodiert. Für ein gültiges Token kontaktieren Sie bitte datenabfrage@app-ichbinde.de";
  return;
}
$ciphermessage = $_POST['message'];

$commando = "/home/jw78/IchBinDaCommandLineDecoder /home/jw78/ichbindaKeys/ ";
$commando .= " /home/jw78/cipheredMessages/" . $token . ".txt ";
$commando .= " /home/jw78/decodedMessages/" . $token . ".csv ";
$commando .= " /home/jw78/decodedMessages/" . $token . ".json ";

shell_exec($commando);

echo $commando;

?>
