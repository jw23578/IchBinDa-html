<?php

$mail = mailparse_msg_parse_file ( $_FILES['file']['tmp_name'] ) ;
$struct = mailparse_msg_get_structure($mail);
$msginfo = mailparse_msg_get_part_data($mail);

echo print_r($struct);


// echo readfile($_FILES['file']['tmp_name']);

?>
