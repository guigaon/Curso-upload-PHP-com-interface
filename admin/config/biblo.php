<?php

 function upload ($arquivo, $config_upload=array()) {
	 
	set_time_limit(0); // tempo limite para aplicação
	$nome_arquivo = $_FILES['arquivo']["name"];  
	$caminho_temporario = $_FILES['arquivo']["tmp_name"];
	$erro = 0; //quando diferente de 0, tem erro
	$msg = ""; // recebe as mensagens de erro ou sucesso
	$retorno = array(); // retorna um array da função
	 
	 if(!empty($nome_arquivo)){
	$extensao = strrchr($nome_arquivo, "."); // pega a extensao do arquivo
	
	
	if($config_upload["renomeia"]){ // se verdadeiro, cria um nome aleatorio concatenado a extensao
		$nome_final = md5($nome_arquivo).$extensao; // renomia aleatoriamente
		
	} else { 
	
		$nome_final = $nome_arquivo; // pega o nome normal
		
	}


	$caminho_final = $config_upload["caminho_absoluto"] . $nome_final; //pega caminho final do arquivo
	
	
	if(($config_upload["verifica_extensao"]) && (!in_array($extensao, $config_upload["extensoes"]))){
		$msg = "Tipo de arquivo nao permitido";
		$erro = -1;
		
	}
	
	
	if(move_uploaded_file($caminho_temporario, $caminho_final)){
		$msg = "Arquivo enviado com sucesso";
		$erro = 0;
		
	} else {
		$msg = "erro ao fazer o upload.";
		$erro = -1;
		
	}
	
	
	} else {
	
	$msg = "está vazio";
	$erro = -1;
	
	}
	
	$retorno = array ("erro" => $erro, "msg" => $msg); //
	return $retorno;
	
}