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
