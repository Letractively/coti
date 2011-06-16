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
                                    <form name="dod_f3" method="post" action="dod_cadastra.php">
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
                                        <input type="hidden" name="dod_" value="<?php echo $dod_; ?>" />
                                        <input type="hidden" name="dod_" value="<?php echo $dod_; ?>" />
                                        <input type="hidden" name="dod_" value="<?php echo $dod_; ?>" />
                                        <input type="hidden" name="dod_" value="<?php echo $dod_; ?>" />
                                        <tr>
                                            <td class="tdh1top" colspan="4">Documento de Oficializa&ccedil;&atilde;o de Demanda</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">3 - Demais Integrantes de Equipe de Planejamento da Contrata&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td>Integrante T&eacute;cnico: </td>
                                            <td> <select name="dod_f3_it" id="dod_f3_it">
                                                    <option value="escolherit" selected="selected">Escolher Int. Técnico</option>
                                                    <option value="escolheroutro">Outro Int. Técnico</option>
                                                </select>  </td>
                                            <td>Telefone do I.T.: </td>
                                            <td> <input type="text" name="dod_f3_inttectel" id="dod_f3_inttectel" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail do Integrante T&eacute;c.: </td>
                                            <td colspan="3"> <input type="text" name="dod_f3_inttecmail" id="dod_f3_inttecmail" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Integrante Administrativo: </td>
                                            <td> <select name="dod_f3_ia" id="dod_f3_ia">
                                                    <option value="escolheria" selected="selected">Escolher Int. Admin.</option>
                                                    <option value="escolheroutro">Outro Int. Admin.</option>
                                                </select>  </td>
                                            <td>Telefone do I.A.:</td>
                                            <td> <input type="text" name="dod_f3_intadmtel" id="dod_f3_intadmtel" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail do Integrante Admin.:</td>
                                            <td colspan="3"> <input type="text" name="dod_f3_intadmmail" id="dod_f3intadmmail" class="caixa" onfocus="blur()" /> </td>
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
                                            <?php
                                            
                                                $dod_setor = $_POST['dod_setor'];
                                                $dod_data = $_POST['dod_data'];
                                                $dod_nomeproj = $_POST['dod_nomeproj'];
                                                $dod_respdem = $_POST['dod_respdem'];
                                                $dod_respdemteld = $_POST['dod_respdemtel'];
                                                $dod_respmail = $_POST['dod_respmail'];
                                                $dod_respsiape = $_POST['dod_respsiape'];
                                                $dod_intreq = $_POST['dod_intreq'];
                                                $dod_intreqtel = $_POST['dod_intreqtel'];
                                                $dod_intreqmail = $_POST['dod_intreqmail'];
                                                $dod_fonterec = $_POST['dod_fonterec'];

                                            ?>
                                            <td colspan="4" align="right"> <input type="reset" name="dod_f3_reset" value="Limpar" style="font-weight:bold" /> &nbsp; <input type="submit" name="dod_f3_edit" value="Editar" style="font-weight:bold" /> &nbsp; <input type="submit" name="dod_f3_enviar" value="Salvar" style="font-weight:bold"  /> </td>

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
