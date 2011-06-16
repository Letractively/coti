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
                if (file_exists($pg . $ext)) {
                    include($pg . $ext);
                } else {
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
                    if (file_exists($pg . $ext)) {
                        include($pg . $ext);
                    } else {
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
                                if (file_exists($pg . $ext)) {
                                    include($pg . $ext);
                                } else {
                                    include("sidebar.php");
                                }
                                ?>
                            </div>
                            <!-- fim #menuesquerdo -->
                            <!-- inicio #conteudo -->
                            <div id="content">

                                <table class="table_form" align="center">
                                    <form  name="f7" method="get" action="#">
                                        <tr>
                                            <td class="tdh1top" colspan="5">An&aacute;lise de Riscos</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">1 - Riscos do Processo de Contrata&ccedil;&atilde;o </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" rowspan="16">Risco 1</td>
                                            <td class="tdh4top">Risco</td>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" rowspan="5">Probabilidade</td>
                                            <td rowspan="5">&nbsp;</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Dano</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o Preventiva</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o de Conting&ecirc;ncia</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh3top" rowspan="16">Risco 2</td>
                                            <td class="tdh4top">Risco</td>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" rowspan="5">Probabilidade</td>
                                            <td rowspan="5">&nbsp;</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Dano</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o Preventiva</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o de Conting&ecirc;ncia</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td colspan="5">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" rowspan="16">Risco 3</td>
                                            <td class="tdh4top">Risco</td>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" rowspan="5">Probabilidade</td>
                                            <td rowspan="5">&nbsp;</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Dano</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o Preventiva</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o de Conting&ecirc;ncia</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td colspan="5">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" rowspan="16">Risco ...</td>
                                            <td class="tdh4top">Risco</td>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" rowspan="5">Probabilidade</td>
                                            <td rowspan="5">&nbsp;</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Dano</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o Preventiva</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o de Conting&ecirc;ncia</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td colspan="5">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">2 - Riscos da Solu&ccedil;&atilde;o de Tecnologia da Informa&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" rowspan="16">Risco 1</td>
                                            <td class="tdh4top">Risco</td>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" rowspan="5">Probabilidade</td>
                                            <td rowspan="5">&nbsp;</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Dano</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o Preventiva</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o de Conting&ecirc;ncia</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh3top" rowspan="16">Risco 2</td>
                                            <td class="tdh4top">Risco</td>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" rowspan="5">Probabilidade</td>
                                            <td rowspan="5">&nbsp;</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Dano</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o Preventiva</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o de Conting&ecirc;ncia</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh3top" rowspan="16">Risco 3</td>
                                            <td class="tdh4top">Risco</td>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" rowspan="5">Probabilidade</td>
                                            <td rowspan="5">&nbsp;</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Dano</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o Preventiva</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o de Conting&ecirc;ncia</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh3top" rowspan="16">Risco ...</td>
                                            <td class="tdh4top">Risco</td>
                                            <td colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" rowspan="5">Probabilidade</td>
                                            <td rowspan="5">&nbsp;</td>
                                            <td class="tdh4top">Id</td>
                                            <td class="tdh4top">Dano</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td>...</td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o Preventiva</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh4top">Id</td>
                                            <td colspan="2" class="tdh4top">A&ccedil;&atilde;o de Conting&ecirc;ncia</td>
                                            <td class="tdh4top">Respons&aacute;vel</td>
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
                                            <td class="tdh2top" colspan="5">Ci&ecirc;ncia</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" colspan="2">Integrante T&eacute;cnico</td>
                                            <td class="tdh4top">Integrante Requisitante</td>
                                            <td class="tdh4top" colspan="2">Integrante Administrativo</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p><input type="text" name="f7_cienintec" /><br />_______________________________<br /> Nome  <br />Mat.:</p></td>
                                            <td align="center"><p><input type="text" name="f7_cieninreq" /><br />_______________________________<br /> Nome  <br />Mat.:</p></td>
                                            <td colspan="2" align="center"><p><input type="text" name="f7_cieninadm" /><br />_______________________________<br /> Nome <br />Mat.:</p></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="center"><p>&nbsp;</p><p>____________________, _______ de ______________ de ___________ </p><p>&nbsp;</p></td>
                                        </tr>


                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="right"> <input type="reset" name="f1_reset" value="Limpar" style="font-weight:bold" /> &nbsp; <input type="submit" name="f1_edit" value="Editar" style="font-weight:bold" /> &nbsp; <input type="submit" name="f1_enviar" value="Salvar" style="font-weight:bold"  /> </td>

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
                                if (file_exists($pg . $ext)) {
                                    include($pg . $ext);
                                } else {
                                    include("footer.php");
                                }
                ?>
            </div>
            <!-- fim #footer -->
        </div>
    </body>
</html>
