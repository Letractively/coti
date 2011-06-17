<!DOCTYPE HTML>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>CoTI - Contrata&ccedil;&atilde;o de TI</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	</head>
	<body>
		<div id="prin">
			<!-- inicio #header -->
			<div>
				<?php
					$pg = $_GET['pg'];
					$ext = ".php"; 
					if(file_exists($pg . $ext)) { 
						include($pg . $ext); 
					}else{
						include("header.php");
					}
				?>
			</div>
			<!-- fim #header -->
			<!-- inicio wrapper -->
			<div id="wrapper">
				<!-- inicio #menu -->
				<div>
					<?php
						$pg = $_GET['pg'];
							$ext = ".php"; 
						if(file_exists($pg . $ext)) { 
							include($pg . $ext); 
						}else{
							include("menu.php");
						}
					?>
				</div>
				<!-- fim #menu -->
				<!-- inicio #pagina -->
				<div id="pagina">
					<!-- inicio #pagina bgtopo -->
					<div id="pagina-bgtopo">
						<!-- inicio #pagina bgbtm -->
						<div id="pagina-bgbtm">
							<!-- inicio #menu esquerdo -->
							<div id="bar">
								<?php
									$pg = $_GET['pg'];
									$ext = ".php"; 
									if(file_exists($pg . $ext)) { 
										include($pg . $ext); 
									}else{
										include("sidebar.php");
									}
								?>
							</div>
							<!-- fim #menuesquerdo -->
							<!-- inicio #conteudo -->
							<div>
								<?php
									$pg = $_GET['pg'];
									$ext = ".php"; 
										if(file_exists($pg . $ext)) { 
											include($pg . $ext); 
										}else{
											include("home.php");
										}
								?>
								<div style="clear: both;">&nbsp;</div>
							</div>
							<!-- fim #conteudo -->
					       		<div style="clear: both;"></div>
						</div>
						<!-- fim #pagina bgbtm -->
					</div>
					<!-- fim #pagina tbgopo -->
				</div>
				<!-- fim #pagina -->
			</div>
			<!-- fim wrapper -->
				<!-- inicio footer -->
				<div>
					<?php
						$pg = $_GET['pg'];
						$ext = ".php"; 
						if(file_exists($pg . $ext)) { 
							include($pg . $ext); 
						}else{
							include("footer.php");
						}
					?>
				</div>
				<!-- fim #footer -->
		</div>
	</body>
</html>