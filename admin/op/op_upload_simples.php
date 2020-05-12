<?php
require "../config/config_upload.php";

$nome_arquivo = $_FILES['arquivo']["name"];  
$caminho_temporario = $_FILES['arquivo']["tmp_name"];


echo "nome:" . $nome_arquivo . "<br> temp:" . $caminho_temporario;