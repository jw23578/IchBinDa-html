<?php

$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];
$field_subject = $_POST['subject'];

$mail_to = 'kontakt@app-ichbinda.de';
$subject = 'Nachricht von einem IBD Besucher: '.$field_name.' Subject: '.$field_subject;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Vielen Dank für deine Nachricht.');
        window.location = 'index.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Oh, das ist ein Fehler aufgetreten, bitte schreibe eine Nachricht an: kontakt@app-ichbinda.de');
        window.location = 'index.html';
    </script>
<?php
}

?>
