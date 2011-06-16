<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <title>CoTI - Editar Categoria de Setores</title>
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
                                    <form name="cadcatarea" method="get" action="#">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Categoria de Setores</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <input type="text" name="pqcatsetores" value="Pesquisar Categoria..." onfocus="this.value='';" />
                                                <input type="submit" value="Pesquisar" style="font-weight:bold" />
                                            </td>
                                        </tr>
<!--                                        <tr>
                                            <td>Nome:</td>
                                            <td>Descri&ccedil;&atilde;o:</td>
                                            <td><input type="text" name="cadcatset_nome" /></td>
                                        </tr>-->
                                        <tr>
                                            <td colspan="4">
                                                <table align="center" width="100%">
                                                    <tr>
                                                        <td>Nome:</td>
                                                        <td>Descri&ccedil;&atilde;o:</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
<!--                                        <tr>

                                            <td><textarea name="cadcatset_desc" cols="70" rows="5"></textarea></td>
                                        </tr>-->

                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right"> <input type="reset" name="cadcatset_reset" value="Limpar" style="font-weight:bold" /> &nbsp; <input type="submit" name="cadcatset_edit" value="Editar" style="font-weight:bold" /> &nbsp; <input type="submit" name="cadcatset_enviar" value="Salvar" style="font-weight:bold"  /> </td>

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
