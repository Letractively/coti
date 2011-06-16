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
                                                        <div id="content">
                                                            
                                <table class="table_form" align="center">
                                    <form name="f6" method="get" action="#">
                                        <tr>
                                            <td class="tdh1top" colspan="5">Estrat&eacute;gia da Contrata&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">1 - Solu&ccedil;&atilde;o de Tecnologia da Inform&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">1.1 - Descri&ccedil;&atilde;o da Solu&ccedil;&atilde;o Escolhida</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> <textarea name="F6_descsol" cols="85" rows="7"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Bens Que Comp&otilde;e a Solu&ccedil;&atilde;o </td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="4"> <input type="text" name="f6_bens1" /></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Servi&ccedil;os Que Comp&otilde;e a Solu&ccedil;&atilde;o </td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">1.2 - Defini&ccedil;&atilde;o da Solu&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="3">Crit&eacute;rio</td>
                                            <td class="tdh4top" colspan="2">Atendimento da Solu&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">&Eacute; poss&iacute;vel especificar o servi&ccedil;o usando par&acirc;metros usuais de mercado?</td>
                                            <td colspan="2">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">&Eacute; poss&iacute;vel medir o desempenho da qualidade usando par&acirc;metros usuais de mercado?</td>
                                            <td colspan="2">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">O objeto da contrata&ccedil;&atilde;o se estende necessariamente por mais de um ano?</td>
                                            <td colspan="2">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">O objeto da contrata&ccedil;&atilde;o &eacute; essencial para o neg&oacute;cio?</td>
                                            <td colspan="2">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">2 - Responsabilidade da Contratante e da Contratada</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">2.1 - Deveres e responsabilidade da Contratante</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="4">Dever / Responsabilidade</td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">2.2 - Deveres e responsabilidade da Contratada</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="4">Dever / Responsabilidade</td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">3 - Indica&ccedil;&atilde;o dos Termos Contratuais</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">3.1 - Procedimentos e Crit&eacute;rios de Aceita&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Etapa / Fase / Item</td>
                                            <td class="tdh4top">Indicador</td>
                                            <td class="tdh4top">Valor M&iacute;nimo Aceit&iacute;vel</td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="2">&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="2">&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="2">&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="2">&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">3.2 - Estimativa de Volume de Servi&ccedil;os ou Bens</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Servi&ccedil;o</td>
                                            <td class="tdh4top">Estimativa</td>
                                            <td class="tdh4top">Forma de Estimativa</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">3.3 - Metodologia da Avalia&ccedil;&atilde;o da Qualidade e da Adequa&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Etapa / Fase / item</td>
                                            <td class="tdh4top" colspan="2">M&eacute;todo de Avalia&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="2">&nbsp; </td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="2">&nbsp; </td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="2">&nbsp; </td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="2">&nbsp; </td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">3.4 - Inspe&ccedil;&otilde;es e Dilig&ecirc;ncias</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Tipo</td>
                                            <td class="tdh4top" colspan="2">M&eacute;todo de Exerc&iacute;cio</td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="2">&nbsp; </td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="2">&nbsp; </td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="2">&nbsp; </td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="2">&nbsp; </td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">3.5 - Forma de Pagamento</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"> <textarea name="f6_pagar" cols="85" rows="6" > </textarea></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">3.6 - Cronograma de Execu&ccedil;&atilde;o F&iacute;sico-Financeira</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Entrega</td>
                                            <td class="tdh4top">Data de Entrega</td>
                                            <td class="tdh4top">Percentual Pago</td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Total:</td>
                                            <td colspan="2"> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">3.7 - Mecanismos Formais de Comunica&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Fun&ccedil;&atilde;o de Com. 1: </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Documento</td>
                                            <td class="tdh4top">Emissor</td>
                                            <td class="tdh4top">Destinat&aacute;rio</td>
                                            <td class="tdh4top">Meio</td>
                                            <td class="tdh4top">Periodici.</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Fun&ccedil;&atilde;o de Com. 2: </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Documento</td>
                                            <td class="tdh4top">Emissor</td>
                                            <td class="tdh4top">Destinat&aacute;rio</td>
                                            <td class="tdh4top">Meio</td>
                                            <td class="tdh4top">Periodici.</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Fun&ccedil;&atilde;o de Com. 3: </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Documento</td>
                                            <td class="tdh4top">Emissor</td>
                                            <td class="tdh4top">Destina&aacute;rio</td>
                                            <td class="tdh4top">Meio</td>
                                            <td class="tdh4top">Periodici.</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Fun&ccedil;&atilde;o de Com. ...: </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Documento</td>
                                            <td class="tdh4top">Emissor</td>
                                            <td class="tdh4top">Destinat&aacute;rio</td>
                                            <td class="tdh4top">Meio</td>
                                            <td class="tdh4top">Periodici.</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                            <td class="tdh4top">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">3.8 - Regras para Aplica&ccedil;&otilde;es de Multas e San&ccedil;&otilde;es </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top" colspan="3">Ocorr&ecirc;ncia</td>
                                            <td class="tdh4top">San&ccedil;&atilde;o / Multa </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">1 </td>
                                            <td colspan="3"> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">2 </td>
                                            <td colspan="3"> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">3 </td>
                                            <td colspan="3"> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">... </td>
                                            <td colspan="3"> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">4 - Or&ccedil;amento Detalhado </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top" colspan="3">Bens / Servi&ccedil;o</td>
                                            <td class="tdh4top">Valor Estimado </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">1 </td>
                                            <td colspan="3"> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">2 </td>
                                            <td colspan="3"> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">3 </td>
                                            <td colspan="3"> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">... </td>
                                            <td colspan="3"> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">5 - Adequa&ccedil;&atilde;o Or&ccedil;ament&aacute;ria</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 5.1 - Fonte de Recursos </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">valor</td>
                                            <td class="tdh4top" colspan="3">Fonte (Programa / A&ccedil;&atilde;o)</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td colspan="3"> = Total</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 5.2 - Estimativa de Impacto Econ&ocirc;mico-Financeiro </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top">Valor </td>
                                            <td class="tdh4top">Exerc&iacute;cio Financeiro </td>
                                            <td class="tdh4top">Percentual do Or&ccedil;amento </td>
                                            <td class="tdh4top">An&aacute;lise e Conclus&atilde;o </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5"> 6 - Crit&eacute;rios T&eacute;cnicos de Julgamento das Propostas </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 6.1 - Proposta T&eacute;cnica </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5"> 6.1.1 -  Organiza&ccedil;&atilde;o das Propostas </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"> <textarea name="f6_orgprop" cols="80" rows="5"> </textarea></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5"> 6.1.2 - Crit&eacute;rios T&eacute;cnicos Pontu&aacute;veis (apenas para melhor t&eacute;cnica ou t&eacute;cnica e pre&ccedil;o) </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top">Crit&eacute;rio </td>
                                            <td class="tdh4top">Pontua&ccedil;&atilde;o </td>
                                            <td class="tdh4top">% </td>
                                            <td class="tdh4top">Justificativa </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 6.2 - Crit&eacute;rios de Sele&ccedil;&atilde;o </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5"> Licita&ccedil;&atilde;o </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Modalidade</td>
                                            <td colspan="2"></td>
                                            <td class="tdh4top"> Tipo</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 6.3 - Qualifica&ccedil;&atilde;o T&eacute;cnica </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5"> 6.3.1 - Requisitos de capacita&ccedil;&atilde;o e Experi&ecirc;ncia </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Requisito</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5"> 6.3.2 - Requisitos de Qualifica&ccedil;&atilde;o das Equipes T&eacute;cnicas </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Qualifica&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">Ci&ecirc;ncia</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="2">Integrante T&eacute;cnico</td>
                                            <td class="tdh4top">Integrante Requisitante</td>
                                            <td class="tdh4top" colspan="2">Integrante Administrativo</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p><input type="text" name="f6_cienintec" /><br />_______________________________<br /> Nome  <br />Mat.:</p></td>
                                            <td align="center"><p><input type="text" name="f6_cieninreq" /><br />_______________________________<br /> Nome  <br />Mat.:</p></td>
                                            <td colspan="2" align="center"><p><input type="text" name="f6_cieninadm" /><br />_______________________________<br /> Nome <br />Mat.:</p></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="center"><p>&nbsp;</p><p>____________________, _______ de ______________ de ___________ </p><p>&nbsp;</p></td>
                                        </tr>


                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="right"> <input type="reset" name="f1_reset" value="Limpar" style="font-weight:bold" /> &nbsp; <input type="submit" name="f1_edit" value="Editar" style="font-weight:bold" /> &nbsp; <input type="submit" name="f1_enviar" value="Salvar" style="font-weight:bold"  />
                                            </td>
                                        </tr>
                                    </form>
                                </table>
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
