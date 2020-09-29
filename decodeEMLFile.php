<?php

require_once __DIR__.'/vendor/autoload.php';

$token = $_GET['token'];
if (!file_exists("/home/jw78/decodeToken/" . $token))
{
  echo "Das Token ist ungültig die Nachrichten werden nicht dekodiert. Für ein gültiges Token kontaktieren Sie bitte datenabfrage@app-ichbinde.de";
  return;
}

$filename = $_FILES['file']['tmp_name'];

$parser = new PhpMimeMailParser\Parser();
$parser->setPath($filename);

$ciphermessage = $parser->getMessageBody('text');

$cipheredFilename = "/home/jw78/cipheredMessages/" . $token . ".txt";
file_put_contents($cipheredFilename, $ciphermessage);

$decodedFilename = "/home/jw78/decodedMessages/" . $token . ".json";

$commando = "/home/jw78/IchBinDaCommandLineDecoder /home/jw78/ichbindaKeys/ ";
$commando .= $cipheredFilename . " ";
$commando .= " /home/jw78/decodedMessages/" . $token . ".csv ";
$commando .= $decodedFilename;

shell_exec($commando);

echo file_get_contents($decodedFilename);

?>
