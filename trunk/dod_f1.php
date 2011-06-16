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
                                    <form name="dod_f1" method="post" action="dod_f2.php">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Documento de Oficializa&ccedil;&atilde;o de Demanda</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">1 - Identifica&ccedil;&atilde;o da &Aacute;rea Requisitante da Solu&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td>Unidade/Setor/Departamento:</td>
                                            <td> <select name="dod_f1_setor" id="dod_f1_setor">
                                                    <option value="escolhersetor" selected="selected">Escolher Setor</option>
                                                    <option value="escolheroutro">Outro Setor</option>
                                                </select>
                                            </td>
                                            <td>Data: </td>
                                            <td> <input type="text" name="dod_f1_data" id="dod_f1_data" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Nome do Projeto: </td>
                                            <td colspan="3"> <input type="text" name="dod_f1_nomeproj" id="dod_f1_nomeproj" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Resp. pela Demanda: </td>
                                            <td> <input type="text" name="dod_f1_respdem" id="dod_f1_respdem" /> </td>
                                            <td>Tel. do Respons&aacute;vel: </td>
                                            <td> <input type="text" name="dod_f1_respdemtel" id="dod_f1_respdemtel" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail do Respons&aacute;vel: </td>
                                            <td> <input type="text" name="dod_f1_respmail" id="dod_f1_respmail" class="caixa" onfocus="blur()" /> </td>
                                            <td>SIAPE do Resp.: </td>
                                            <td> <input type="text" name="dod_f1_respsiape" id="dod_f1_respsiape" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Integrante Requisitante: </td>
                                            <td> <input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /> </td>
                                            <td>Telefone do I.R.: </td>
                                            <td> <input type="text" name="dod_f1_intreqtel" id="dod_f1_intreqtel" class="caixa" onfocus="blur()" /></td>
                                        </tr>
                                        <tr>
                                            <td>E-mail do Int. Requisitante: </td>
                                            <td colspan="3"> <input type="text" name="dod_f1_intreqmail" id="dod_f1_intreqmail" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Fonte de Recursos: </td>
                                            <td colspan="3"> <input type="text" name="dod_f1_fonterec" id="dod_f1_fonterec" /> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="text-align: right;"> <input type="reset" name="dod_f1_reset" value="Limpar" style="font-weight:bold" /> &nbsp; 
                                                <input type="submit" name="dod_f1_enviar" value="Próximo >>" style="font-weight:bold"  /> </td>

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
