<?php
require "../config/config_upload.php";
require "../config/biblo.php";

$subir = upload($_FILES["arquivo"], $config_upload); // função de upload, 1° parametro recebe "arquivo" na variavel arquivo, e a string "config_upload"

var_dump($subir); // imprime arrays