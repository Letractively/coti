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
                                    <form name="dod_f1" method="post" action="avc_f3.php">
                                        <tr>
                                            <td class="tdh1top" colspan="5">Análise de Viabilidade da Contrata&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">3 - Levantamento das Solu&ccedil;&otilde;es Disponíveis</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4"> Solu&ccedil;&atilde;o 1</td>
                                            <td colspan="">Nome</td>
                                            <td colspan="2">Entidade</td>
                                            <td colspan="">Valor</td>

                                        </tr>
                                        <tr>
                                            <td colspan=""><input type="text" name="" id="" /></td>
                                            <td colspan="2"> <input type="text" name="" id="" /></td>
                                            <td colspan=""><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="">Descri&ccedil;&atilde;o:</td>
                                            <td colspan="3"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="">Fornecedor:</td>
                                            <td colspan="3"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4"> Solu&ccedil;&atilde;o 2</td>
                                            <td colspan="">Nome</td>
                                            <td colspan="2">Entidade</td>
                                            <td colspan="">Valor</td>

                                        </tr>
                                        <tr>
                                            <td colspan=""><input type="text" name="" id="" /></td>
                                            <td colspan="2"> <input type="text" name="" id="" /></td>
                                            <td colspan=""><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="">Descri&ccedil;&atilde;o:</td>
                                            <td colspan="3"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="">Fornecedor:</td>
                                            <td colspan="3"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                       <tr>
                                            <td rowspan="4"> Solu&ccedil;&atilde;o 3</td>
                                            <td colspan="">Nome</td>
                                            <td colspan="2">Entidade</td>
                                            <td colspan="">Valor</td>

                                        </tr>
                                        <tr>
                                            <td colspan=""><input type="text" name="" id="" /></td>
                                            <td colspan="2"> <input type="text" name="" id="" /></td>
                                            <td colspan=""><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="">Descri&ccedil;&atilde;o:</td>
                                            <td colspan="3"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="">Fornecedor:</td>
                                            <td colspan="3"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4"> Solu&ccedil;&atilde;o 4</td>
                                            <td colspan="">Nome</td>
                                            <td colspan="2">Entidade</td>
                                            <td colspan="">Valor</td>

                                        </tr>
                                        <tr>
                                            <td colspan=""><input type="text" name="" id="" /></td>
                                            <td colspan="2"> <input type="text" name="" id="" /></td>
                                            <td colspan=""><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="">Descri&ccedil;&atilde;o:</td>
                                            <td colspan="3"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="">Fornecedor:</td>
                                            <td colspan="3"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4"> Solu&ccedil;&atilde;o 5</td>
                                            <td colspan="">Nome</td>
                                            <td colspan="2">Entidade</td>
                                            <td colspan="">Valor</td>

                                        </tr>
                                        <tr>
                                            <td colspan=""><input type="text" name="" id="" /></td>
                                            <td colspan="2"> <input type="text" name="" id="" /></td>
                                            <td colspan=""><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="">Descri&ccedil;&atilde;o:</td>
                                            <td colspan="3"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="">Fornecedor:</td>
                                            <td colspan="3"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="5">4 - Identifica&ccedil;&atilde;o das Solu&ccedil;&otilde;es e Alternativas Dispon&iacute;veis</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <table width="100%">
                                        <tr>
                                            <td width="50%">Requisito</td>
                                            <td width="20%">Id da Solu&ccedil;&atilde;o</td>
                                            <td width="10%">Sim</td>
                                            <td width="10%">N&atilde;o</td>
                                            <td width="10%">N&atilde;o se aplica</td>
                                        </tr>
                                        <tr>
                                            <td width="50%">A Solu&ccedil;&atilde;o encontra-se implantada  em outro &oacute;rg&atilde;o ou entidade da Administra&ccedil;&atilde;o P&uacute;blica Federal?</td>
                                            <td width="20%"><input type="text" name="" id="" /><br /><input type="text" name="" id="" /><br /><input type="text" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td>A Solu&ccedil;&atilde;o est&aacute; dispon&iacute;vel no Portal do Software P&uacute;blico Brasileiro?</td>
                                            <td width="20%"><input type="text" name="" id="" /><br /><input type="text" name="" id="" /><br /><input type="text" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td>A Solu&ccedil;&atilde;o &eacute; um software livre ou software p&uacute;blico?</td>
                                            <td width="20%"><input type="text" name="" id="" /><br /><input type="text" name="" id="" /><br /><input type="text" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td>A Solu&ccedil;&atilde;o &eacute; aderente &agrave;s  pol&iacute;ticas, premissas e especifica&ccedil;&otilde;ees t&eacute;cnicas definidas pelos Padr&otilde;es e-PING, e-MAG?</td>
                                           <td width="20%"><input type="text" name="" id="" /><br /><input type="text" name="" id="" /><br /><input type="text" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td>A Solu&ccedil;&atilde;o &eacute; aderente &agrave;s orienta&ccedil;&otilde;es, premissas e especificaves t&eacute;cnicas e funcionais do – e-ARQ Brasil?</td>
                                           <td width="20%"><input type="text" name="" id="" /><br /><input type="text" name="" id="" /><br /><input type="text" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                            <td width="10%"><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /><br /><input type="checkbox" name="" id="" /></td>
                                        </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" style="text-align: right;"> <input type="reset" name="avc_f2_reset" value="Limpar" style="font-weight:bold" /> &nbsp; <input type="submit" name="avc_f2_enviar" value="Próximo >>" style="font-weight:bold"  /> </td>

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
