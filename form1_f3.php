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
                                    <form name="f1" method="post" action="#">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Documento de Oficializa&ccedil;&atilde;o de Demanda</td>
                                        </tr>
                                       <tr>
                                            <td class="tdh2top" colspan="4">3 - Demais Integrantes de Equipe de Planejamento da Contrata&ccedil;&atilde;o</td>
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
