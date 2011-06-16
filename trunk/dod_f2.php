<?php

//include (func_conect.php);
$dod_setor = $_POST['dod_f1_setor'];
$dod_data = $_POST['dod_f1_data'];
$dod_nomeproj = $_POST['dod_f1_nomeproj'];
$dod_respdem = $_POST['dod_f1_respdem'];
$dod_respdemtel = $_POST['dod_f1_respdemtel'];
$dod_respmail = $_POST['dod_f1_respmail'];
$dod_respsiape = $_POST['dod_f1_respsiape'];
$dod_intreq = $_POST['dod_f1_intreq'];
$dod_intreqtel = $_POST['dod_f1_intreqtel'];
$dod_intreqmail = $_POST['dod_f1_intreqmail'];
$dod_fonterec = $_POST['dod_f1_fonterec'];

?>
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
                }echo $dod_nomeproj;echo $dod_respdem;
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
                                    <form name="dod_f2" method="post" action="dod_f3.php">
                                        <input type="hidden" name="dod_f1_setor" value="<?php echo $dod_setor; ?>" />
                                        <input type="hidden" name="dod_f1_data" value="<?php echo $dod_data; ?>" />
                                        <input type="hidden" name="dod_f1_nomeproj" value="<?php echo $dod_nomeproj; ?>" />
                                        <input type="hidden" name="dod_f1_respdem" value="<?php echo $dod_respdem; ?>" />
                                        <input type="hidden" name="dod_f1_respdemtel" value="<?php echo $dod_respdemtel; ?>" />
                                        <input type="hidden" name="dod_f1_respmail" value="<?php echo $dod_respmail; ?>" />
                                        <input type="hidden" name="dod_f1_respsiape" value="<?php echo $dod_respsiape; ?>" />
                                        <input type="hidden" name="dod_f1_intreq" value="<?php echo $dod_intreq; ?>" />
                                        <input type="hidden" name="dod_f1_intreqtel" value="<?php echo $dod_intreqtel; ?>" />
                                        <input type="hidden" name="dod_f1_intreqmail" value="<?php echo $dodintreqmail_; ?>" />
                                        <input type="hidden" name="dod_f1_fonterec" value="<?php echo $dod_fontereq; ?>" />
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
                                            <td class="tdh3top" width="5px">Id</td>
                                            <td class="tdh3top">Objetivo Estrat&eacute;gico</td>
                                            <td class="tdh3top" width="5px">Id</td>
                                            <td class="tdh3top">Necessidade da Contrata&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td> </td>
                                            <td>
                                                <table border="0">
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table border="0" width="100%">
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
                                            <td colspan="4">
                                                <table id="campof" border="1" width="100%">
                                                    <tr>
                                                        <td>1 </td>
                                                        <td colspan="3"> <input type="text" name="f1_result" /> </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right"><input type="button" style="font-weight:bold" value="+" onClick="addTextField(f1_result.value)" />
</td>
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
                                            <?php
                                            

                                            ?>
                                            <td colspan="4" align="right"> <input type="reset" name="f1_reset" value="Limpar" style="font-weight:bold" /> &nbsp; 
                                                <input type="submit" name="f1_edit" value="Editar" style="font-weight:bold" /> &nbsp; 
                                                <input type="submit" name="f1_enviar" value="Salvar" style="font-weight:bold"  /> </td>

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
