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
					<span class="tlogo">Uploads de imagens</span>
					<div class="usuario"><a href="">Olá, Manoel jailton<small>mjailton@gmail.com</small></a>
					<div class="thumb"><img src="img/img-user.png"></div>					
					</div>
				</div>
		</div>
		
		
		<div class="conteudo">
		
		<?php
			 
				@$link = $_GET["link"];
							
				$pag[1] = "home.php";
								
								
				
				if (!empty($link))
				{
					
					if (file_exists($pag[$link]))
					{
						
						include $pag[$link];
					}
					else
					{						
						
						include "home.php";
					}
				}
				else
				{					
					include "home.php";
				}			
			
			?>
		</div>
		
		<?php include"rodape.php"?>
</div>		
</body>
</html>