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
                                    <form name="f8" method="get" action="#">
                                        <tr>
                                            <td class="tdh1top" colspan="5">Projeto B&aacute;sico</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">1 - Defini��o do Projeto</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"> <textarea name="f8_defpro" cols="85" rows="5"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5"> 2 - Fundamenta��o da Contrata��o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 2.1 - Rela��o Demanda / Necessidade</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="2">Demanda Prevista</td>
                                            <td class="tdh4top" colspan="2">Quantidade a ser Contratado</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">2.2 - Motiva��o</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"> <textarea name="f8_motiv" cols="85" rows="5"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 2.3 - Resultados a Serem Alcan�ados</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="2">Tipo</td>
                                            <td class="tdh4top" colspan="2">Resultados</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 2.4 - Justificativa da Solu��o Escolhida</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="2">Necessidade</td>
                                            <td class="tdh4top">Benef�cio</td>
                                            <td class="tdh4top">Tipo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5"> 3 - Descri��o da Solu��o de TI</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top"> Descri��o:</td>
                                            <td colspan="4"> <textarea name="f8_descsti" cols="60" rows="5"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" rowspan="5">Bens e Serv i�os</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="2">Bem / Servi�o</td>
                                            <td class="tdh4top">Valor</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5"> 4 - Especifica��o T�cnica (Requisitos da Solu��o)</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 4.1 - Condi��es Gerais</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"> <textarea name="f8_condger" cols="85" rows="5"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">4.2 - Requisitos Internos</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5">4.2.1 � Requisitos Internos Funcionais</td>
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
                                            <td class="tdh4top" colspan="5">4.2.1 � Requisitos Internos Funcionais</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="2">Entrega</td>
                                            <td class="tdh4top" colspan="2">Prazo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
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
                                            <td class="tdh3top" colspan="5">4.3 - Requisitos Externos</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">A Solu��o Deve Estar de Acordo Com as Seguintes Normas / Padr�es / Pol�ticas:</td>
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
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5"> 5 - Modelo de Presta��o de Servi�o / Fornecimento de Bens</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 5.1 - Justificativa para Parcelamento do Objeto</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"> <textarea name="f8_justpobj" cols="85" rows="5"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Objeto</td>
                                            <td class="tdh4top">Forma de Parcelamento</td>
                                            <td class="tdh4top" colspan="2">Justificativa</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td></td>
                                            <td></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 5.2 - Metodologia de Trabalho</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id Bem / Servi�o</td>
                                            <td class="tdh4top" colspan="2">Forma de Execu��o / Fornecimento</td>
                                            <td class="tdh4top" colspan="2">Justificativa</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="f8_idmettr1" /></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td> <input type="text" name="f8_idmettr2" /></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="f8_idmettr3" /></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="f8_idmettrn" /></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="f8_idmettrn" /></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5"> 6 - Elementos para Gest�o do Contrato</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 6.1 - Pap�is e Responsabilidades	</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Papel</td>
                                            <td class="tdh4top">Entidade</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Responsabilidade</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">1</td>
                                            <td rowspan="4"></td>
                                            <td rowspan="4"></td>
                                            <td>1</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">2</td>
                                            <td class="tdh4top" rowspan="5"></td>
                                            <td class="tdh4top" rowspan="5"></td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Responsabilidade</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td ></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">3</td>
                                            <td class="tdh4top" rowspan="5"></td>
                                            <td class="tdh4top" rowspan="5"></td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Responsabilidade</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td ></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="5">...</td>
                                            <td class="tdh4top" rowspan="5"></td>
                                            <td class="tdh4top" rowspan="5"></td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Responsabilidade</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td ></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5">6.2 � Deveres e responsabilidade da Contratante</td>
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
                                            <td class="tdh3top" colspan="5">6.3 � Deveres e responsabilidade da Contratada</td>
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
                                            <td class="tdh3top" colspan="5">6.4 � Forma de Acompanhamento do Contrato</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Evento</td>
                                            <td class="tdh4top" colspan="2">Forma de Acompanhamento</td>
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
                                            <td class="tdh3top" colspan="5">6.5 � Metodologia da Avalia��o da Qualidade e da Adequa��o</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Etapa / Fase / item</td>
                                            <td class="tdh4top" colspan="2">M�todo de Avalia��o</td>
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
                                            <td class="tdh3top" colspan="5">6.6 � N�veis de Servi�o</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Etapa / Fase / Item</td>
                                            <td class="tdh4top">Indicador</td>
                                            <td class="tdh4top">Valor M�nimo Aceit�vel</td>
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
                                            <td class="tdh3top" colspan="5">6.7 � Estimativa de Volume de Servi�os ou Bens</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Servi�o</td>
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
                                            <td class="tdh3top" colspan="5">6.8 � Prazos e Condi��es</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Etapa / Fase / item</td>
                                            <td class="tdh4top" colspan="2">Prazo / Condi��o</td>
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
                                            <td class="tdh3top" colspan="5"> 6.9 � Aceite / Altera��o / Cancelamento </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Condi��o de Aceite</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Condi��o de Altera��o</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Condi��o de Cancelamento</td>
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
                                            <td class="tdh3top" colspan="5">6.10 � Condi��es de Pagamento</td>
                                        </tr>
                                        <tr>
                                            <td>Id</td>
                                            <td class="tdh4top" colspan="2">Etapa / Fase / item</td>
                                            <td class="tdh4top" colspan="2">Condi��o de Pagamento</td>
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
                                            <td class="tdh3top" colspan="5"> 6.11 � Garantia </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Garantia</td>
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
                                            <td class="tdh3top" colspan="5"> 6.12 � Propriedade, Sigilo e Restri��es </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Direito de Propriedade</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Condi��o de Manuten��o de Sigilo</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Restri��o</td>
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
                                            <td class="tdh3top" colspan="5">6.13 � Mecanismos Formais de Comunica��o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Fun��o de Com. 1: </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Documento</td>
                                            <td class="tdh4top">Emissor</td>
                                            <td class="tdh4top">Destinat�rio</td>
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
                                            <td class="tdh4top">Fun��o de Com. 2: </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Documento</td>
                                            <td class="tdh4top">Emissor</td>
                                            <td class="tdh4top">Destinat�rio</td>
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
                                            <td class="tdh4top">Fun��o de Com. 3: </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Documento</td>
                                            <td class="tdh4top">Emissor</td>
                                            <td class="tdh4top">Destinat�rio</td>
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
                                            <td class="tdh4top">Fun��o de Com. ...: </td>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Documento</td>
                                            <td class="tdh4top">Emissor</td>
                                            <td class="tdh4top">Destinat�rio</td>
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
                                            <td class="tdh2top" colspan="5">7 - Estimativa de Pre�o </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top" colspan="3">Bens / Servi�o</td>
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
                                            <td class="tdh2top" colspan="5">8 - Adequa��o Or�ament�ria</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 8.1 - Fonte de Recursos </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">valor</td>
                                            <td class="tdh4top" colspan="3">Fonte (Programa / A��o)</td>
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
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">9 - San��es Aplic�veis</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top" colspan="3">Ocorr�ncia</td>
                                            <td class="tdh4top">San��o </td>
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
                                            <td class="tdh2top" colspan="5"> 10 - Crit�rios de Sele��o do Fornecedor </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="5"> 10.1 - Proposta T�cnica</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5"> 10.1.1 - Organiza��o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="4">Descri��o</td>
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
                                            <td class="tdh3top" colspan="5"> 10.2 - Qualifica��o T�cnica</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5"> 10.2.1 - Requisitos de Capacita��o e  Experi�ncia </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Papel</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="2">Requisitos</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">1</td>
                                            <td rowspan="4"></td>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</strong></p></td>
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
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Papel</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="2">Requisitos</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">2</td>
                                            <td rowspan="4"></td>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</strong></p></td>
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
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Papel</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="2">Requisitos</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">3</td>
                                            <td rowspan="4"></td>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</strong></p></td>
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
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Papel</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top" colspan="2">Requisitos</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">...</td>
                                            <td rowspan="4"></td>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</strong></p></td>
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
                                            <td class="tdh3top" colspan="5"> 10.3 - Crit�rios de Sele��o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5"> Caracteriza��o da Solu��o de Tecnologia da Informa��o</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"> <textarea name="f8_critsel" cols="60" rows="5"> </textarea> </td>
                                        </tr>
                                        <tr>
                                            <td> Modalidade: </td>
                                            <td colspan="2"> </td>
                                            <td> Tipo:</td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td>Justificativa: </td>
                                            <td colspan="4"> <textarea name="f8_licijus" cols="60" rows="5"></textarea> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5"> Justificativa para Aplica��o do Direito de Prefer�ncia Lei Complementar n� 123/06 e Lei n� 8.248/91</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"> <textarea name="f8_justlei" cols="60" rows="5"> </textarea> </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="5"> Justificativa para Contrata��o Direta</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"> <textarea name="f8_justdir" cols="60" rows="5"> </textarea> </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top" colspan="2">Crit�rio de Habilita��o</td>
                                            <td class="tdh4top" colspan="2">Justificativa </td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top" colspan="2">Crit�rio T�cnico Obrigat�rio</td>
                                            <td class="tdh4top" colspan="2">Justificativa </td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top">Crit�rio </td>
                                            <td class="tdh4top">Pontua��o </td>
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
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top" colspan="2">Crit�rio de Aceitabilidade de Pre�os Unit�rios e Globais</td>
                                            <td class="tdh4top" colspan="2">Justificativa </td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id </td>
                                            <td class="tdh4top" colspan="2">Crit�rio de Julgamento</td>
                                            <td class="tdh4top" colspan="2">Justificativa </td>
                                        </tr>
                                        <tr>
                                            <td>1 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>2 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>3 </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td colspan="2"> </td>
                                            <td colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">Ci�ncia</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="2">Integrante T�cnico</td>
                                            <td class="tdh4top">Integrante Requisitante</td>
                                            <td class="tdh4top" colspan="2">Integrante Administrativo</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p><input type="text" name="f8_cienintec" /><br />_______________________________<br /> Nome  <br />Mat.:</p></td>
                                            <td align="center"><p><input type="text" name="f8_cieninreq" /><br />_______________________________<br /> Nome  <br />Mat.:</p></td>
                                            <td colspan="2" align="center"><p><input type="text" name="f8_cieninadm" /><br />_______________________________<br /> Nome <br />Mat.:</p></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="center"><p>&nbsp;</p><p>____________________, _______ de ______________ de ___________ </p><p>&nbsp;</p></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">Encaminha-se � <em>nome da �rea de licita��es</em> para abertura de processo administrativo objetivando inicia��o de procedimento licitat�rio segundo art. 38 da Lei n� 8.666 de 21 de junho de 1993.</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="right"> <input type="reset" name="f1_reset" value="Limpar" style="font-weight:bold" /> &nbsp; <input type="submit" name="f1_edit" value="Editar" style="font-weight:bold" /> &nbsp; <input type="submit" name="f1_enviar" value="Enviar" style="font-weight:bold"  /> </td>
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
