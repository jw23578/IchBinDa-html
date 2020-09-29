<?php

echo mailparse_msg_parse_file ( $_FILES['file']['tmp_name'] ) ;

echo readfile($_FILES['file']['tmp_name']);

?>
