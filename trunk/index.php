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
			<!-- inicio #menu -->
	
			<!-- fim #menu -->
			<!-- inicio #pagina -->
			<div id="page">
				<!-- inicio #pagina bgtopo -->
				<div id="page-bgtopo">
					<!-- inicio #conteudo -->
					<!--<div id="content"> -->
					<div id="login">
            
						<p class="login_title"> Login </p>
						<form name="login" method="post" action="valida_user.php">
							<div>
								<p> Usu&aacute;rio: <input type="text" name="user_login" id="user-login"/> </p>
								<p> Senha: <input type="password" name="user_pass" id="pass-login"/> </p>
								<p> <input type="submit" name="entrar" id="go-login" value="Entrar" /> </p>
							</div>
						</form>
           				</div>
					<div style="clear: both;">&nbsp;</div>
					<!--</div> -->
					<!-- fim #conteudo -->
        				<!-- inicio #menu esquerdo -->
		  			<!-- fim #menuesquerdo -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			</div>
			<!-- fim #pagina -->
		</div>
        <!-- fim #wrapper -->
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
    <!-- fim #prin -->
</body>
</html>
