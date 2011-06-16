<!DOCTYPE HTML>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTP-8"/>
		<title>CoTI - Contrata&ccedil;&atilde;o de TI</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
                <script type="text/javascript" src="scripts.js"></script>
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
                                    <form name="f1_f1" method="post" action="form1_f2.php">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Documento de Oficializa&ccedil;&atilde;o de Demanda</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">1 - Identifica&ccedil;&atilde;o da &Aacute;rea Requisitante da Solu&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td>Unidade/Setor/Departamento:</td>
                                            <td> <select name="f1-f2_setor">
                                                    <option value="escolhersetor" selected="selected">Escolher Setor</option>
                                                    <option value="escolheroutro">Outro Setor</option>
                                                </select>
                                            </td>
                                            <td>Data: </td>
                                            <td> <input type="text" name="f1_data" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Nome do Projeto: </td>
                                            <td colspan="3"> <input type="text" name="f1_npro" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Resp. pela Demanda: </td>
                                            <td> <input type="text" name="f1_respde" /> </td>
                                            <td>Tel. do Respons&aacute;vel: </td>
                                            <td> <input type="text" name="f1_respdetel" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail do Respons&aacute;vel: </td>
                                            <td> <input type="text" name="f1_respemail" class="caixa" onfocus="blur()" /> </td>
                                            <td>SIAPE do Resp.: </td>
                                            <td> <input type="text" name="f1_respsiape" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Integrante Requisitante: </td>
                                            <td> <input type="text" name="f1_intreq" /> </td>
                                            <td>Telefone do I.R.: </td>
                                            <td> <input type="text" name="f1_intreqtel" class="caixa" onfocus="blur()" /></td>
                                        </tr>
                                        <tr>
                                            <td>E-mail do Int. Requisitante: </td>
                                            <td colspan="3"> <input type="text" name="f1_intreqmail" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Fonte de Recursos: </td>
                                            <td colspan="3"> <input type="text" name="f1_fonterec" /> </td>
                                        </tr>
 <!--                                       <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">Demais Integrantes de Equipe de Planejamento da Contrata&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td>Integrante T&eacute;cnico: </td>
                                            <td> <select name="f1_f2_it">
                                                    <option value="escolherit" selected="selected">Escolher Int. Técnico</option>
                                                    <option value="escolheroutro">Outro Int. Técnico</option>
                                                </select>  </td>
                                            <td>Telefone do I.T.: </td>
                                            <td> <input type="text" name="f1_inttectel" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail do Integrante T&eacute;c.: </td>
                                            <td colspan="3"> <input type="text" name="f1_inttecmail" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Integrante Administrativo: </td>
                                            <td> <select name="f1_f2_ia">
                                                    <option value="escolheria" selected="selected">Escolher Int. Admin.</option>
                                                    <option value="escolheroutro">Outro Int. Admin.</option>
                                                </select>  </td>
                                            <td>Telefone do I.A.:</td>
                                            <td> <input type="text" name="f1_intadmtel" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail do Integrante Admin.:</td>
                                            <td colspan="3"> <input type="text" name="f1_intadmmail" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top">Id</td>
                                            <td class="tdh3top">Objetivo Estrat&eacute;gico</td>
                                            <td class="tdh3top">Id</td>
                                            <td class="tdh3top">Necessidade da Contrata&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td> </td>
                                            <td>
                                                <table border="1">
                                                    <tr>
                                                        <td>1 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3 </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table border="1" width="100%">
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; <input type="hidden" value="Novo" name="teste"/></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">Motiva&ccedil;&atilde;o / Justificativa</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"> <textarea name="f1_moti" cols="55" rows="6" > </textarea></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td>Id </td>
                                            <td class="tdh2top" colspan="3">Resultados A Serem Alcan&ccedil;ados</td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="3"> <input type="text" name="f1_resul1" /> </td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="3"> <input type="text" name="f1_resul2" /> </td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="3"> <input type="text" name="f1_resul3" /> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">Encaminhamento</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><p>Aprovo o prosseguimento da contrata&ccedil;&atilde;o, considerando sua relev&acirc;ncia e oportunidade em rela&ccedil;&atilde;o aos objetivos estrat&eacute;gicos e as necessidades da &Aacute;rea Requisitante.</p>
                                                <p>Em conformidade com o Art. 9&ordm;, &sect; 2&ordm; da Instru&ccedil;&atilde;o Normativa n&ordm; 4 de 12 de novembro de 2010, emitida pela Secretaria de Log&iacute;stica e Tecnologia da Informa&ccedil;&atilde;o do Minist&eacute;rio do Planejamento, Or&ccedil;amento e Gest&atilde;o, encaminha-se  a <em><strong>autoridade competente da &Aacute;rea Administrativa</strong></em> para:</p>
                                                <p>
                                                    <ol type="I">
                                                        <li>Decidir motivadamente sobre o prosseguimento da contrata&ccedil;&atilde;o;</li>
                                                        <li>Indicar o Integrante Administrativo para composi&ccedil;&atilde;o da Equipe de Planejamento da Contrata&ccedil;&atilde;o, quando da continuidade da contrata&ccedil;&atilde;o</li>
                                                    </ol>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">&Aacute;rea Requisitante da Solu&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="center">
                                                <p>&nbsp;</p>
                                                <p> <input type="text" name="f1_f2_req" class="caixa" onFocus="blur()" /> <br /> Nome </p>
                                                <p><input type="text" name="f1_f2_siape_req" class="caixa" onFocus="blur()" /> <br />Matr&iacute;cula:</p>
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="center"><p>&nbsp;</p><p>____________________, _______ de ______________ de ___________ </p><p>&nbsp;</p></td>
                                        </tr>-->
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right"> <input type="reset" name="f1_reset" value="Limpar" style="font-weight:bold" /> &nbsp; <!-- <input type="submit" name="f1_edit" value="Editar" style="font-weight:bold" /> &nbsp; --> <input type="submit" name="f1_enviar" value="Próximo" style="font-weight:bold"  /> </td>

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
