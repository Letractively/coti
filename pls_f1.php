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
                                    <form name="dod_f1" method="post" action="pls_f2.php">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Plano de Sustenta&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">1 - Introdu&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><textarea name="pls_f1_intro" id="pls_f1_intro" cols="50" rows="5"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">2 - Recursos Necessários a Continuidade de Neg&oacute;cio Durante e Ap&oacute;s a Contrata&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="4">2.1 - Recursos Materiais</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Recurso 1: <input type="text" name="" id="" /></td>
                                            <td colspan="">Quant. <input type="text" name="" id="" /></td>
                                            <td colspan="">Disponibilidade <input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">Id</td>
                                            <td colspan="2">A&ccedil;&atilde;o para Obten&ccedil;&atilde;o do Recuso</td>
                                            <td colspan="2">Responsável</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">2 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">3 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">4 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">5 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Recurso 2: <input type="text" name="" id="" /></td>
                                            <td colspan="">Quant. <input type="text" name="" id="" /></td>
                                            <td colspan="">Disponibilidade <input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">Id</td>
                                            <td colspan="2">A&ccedil;&atilde;o para Obten&ccedil;&atilde;o do Recuso</td>
                                            <td colspan="2">Responsável</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">2 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">3 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">4 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">5 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Recurso 3: <input type="text" name="" id="" /></td>
                                            <td colspan="">Quant. <input type="text" name="" id="" /></td>
                                            <td colspan="">Disponibilidade <input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">Id</td>
                                            <td colspan="2">A&ccedil;&atilde;o para Obten&ccedil;&atilde;o do Recuso</td>
                                            <td colspan="2">Responsável</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">2 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">3 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">4 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">5 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Recurso 4: <input type="text" name="" id="" /></td>
                                            <td colspan="">Quant. <input type="text" name="" id="" /></td>
                                            <td colspan="">Disponibilidade <input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">Id</td>
                                            <td colspan="2">A&ccedil;&atilde;o para Obten&ccedil;&atilde;o do Recuso</td>
                                            <td colspan="2">Responsável</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">2 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">3 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">4 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">5 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Recurso 5: <input type="text" name="" id="" /></td>
                                            <td colspan="">Quant. <input type="text" name="" id="" /></td>
                                            <td colspan="">Disponibilidade <input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">Id</td>
                                            <td colspan="2">A&ccedil;&atilde;o para Obten&ccedil;&atilde;o do Recuso</td>
                                            <td colspan="2">Responsável</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">2 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">3 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">4 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">5 </td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                            <td colspan="2"><input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="4">2.2 - Recursos Humanos</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh4top" width="5px">Id </td>
                                            <td class="tdh4top">Tipo</td>
                                            <td class="tdh4top" colspan="2">Requisito</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /></td>
                                            <td colspan="2"><input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /></td>
                                            <td colspan="2"><input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /></td>
                                            <td colspan="2"><input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /></td>
                                            <td colspan="2"><input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /></td>
                                            <td colspan="2"><input type="text" name="dod_f1_intreq" id="dod_f1_intreq" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="text-align: right;"> <input type="reset" name="avc_f1_reset" value="Limpar" style="font-weight:bold" /> &nbsp; <input type="submit" name="avc_f1_enviar" value="Próximo >>" style="font-weight:bold"  /> </td>

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
