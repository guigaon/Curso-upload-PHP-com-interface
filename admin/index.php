<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mjailton projeto oráculo</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
<div class="site">
		<div class="base-topo">
				<div class="conteudo">
					<img src="img/logo.png"  class="logo">
					<div class="usuario"><a href="">Olá, Jairo Sousa<small>jairo.com2@gmail.com</small></a>
					<div class="thumb"><img src="img/img-user.png"></div>					
					</div>
				</div>
		<div class="admin">
			<div class="conteudo">ÀREA ADMINISTRATIVA</div>	
		</div>		
		</div>
		
		<div class="conteudo">
		
		<?php include"menu.php"?>
		
		<div id="conteudocentral">
		<?php
			 
				@$link = $_GET["link"];
							
				$pag[1] = "lst/lista_simples.php";
				$pag[2] = "frm/frm_simples.php";
				$pag[3] = "frm/frm_multiplos.php";
				$pag[4] = "lst/lista_multiplos.php";
								
				
				if (!empty($link))
				{
					
					if (file_exists($pag[$link]))
					{
						
						include $pag[$link];
					}
					else
					{						
						
						include "lst/lista_simples.php";
					}
				}
				else
				{					
					include "lst/lista_simples.php";
				}			
			
			?>
		</div>
		
</div>
		
		
	
		<?php include"rodape.php"?>
	
		
</div>
	</body>
</html>