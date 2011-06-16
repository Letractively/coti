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
                                    <form name="f1_f2" method="post" action="form1_f3.php">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Documento de Oficializa&ccedil;&atilde;o de Demanda</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">2 - Objetivos e Necessidades</td>
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
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right"> <input type="reset" name="f1_reset" value="Limpar" style="font-weight:bold" /> &nbsp; <input type="submit" name="f1_edit" value="Editar" style="font-weight:bold" /> &nbsp; <input type="submit" name="f1_enviar" value="Salvar" style="font-weight:bold"  /> </td>

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
