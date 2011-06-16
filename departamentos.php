<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
        <title>CoTI - Departamentos</title>
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    </head>
    <body>
        <div id="prin">
            <!-- inicio #header -->
            <div>
                <?php
                    include("header.php");
                ?>
            </div>
            <!-- fim #header -->
            <!-- inicio wrapper -->
            <div id="wrapper">
                <!-- inicio #menu -->
                <div>
                    <?php
                        include("menu.php");
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
                                    include("sidebar.php");
                                ?>
                            </div>
                            <!-- fim #menuesquerdo -->
                            <!-- inicio #conteudo -->
                            <div id="content">

                                <table class="table_form" align="center">
                                    <form name="cadcatarea" method="POST" action="cadastra_departamento.php">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Departamentos</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td>Nome:</td>
                                            <td><input id="departamento_nome" type="text" name="departamento_nome" /></td>
                                        </tr>
                                        <tr>
                                            <td>Descri&ccedil;&atilde;o:</td>
                                            <td><textarea id="departamento_descricao" name="departamento_descricao" cols="70" rows="5"></textarea></td>
                                        </tr>

                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right"> 
                                                <input type="reset" name="cadcatset_reset" value="Limpar" style="font-weight:bold" /> &nbsp; 
                                                <!--<input type="submit" name="cadcatset_edit" value="Editar" style="font-weight:bold" /> &nbsp; -->
                                                <input type="submit" name="cadcatset_enviar" value="Salvar" style="font-weight:bold"  /> 
                                            </td>

                                        </tr>
                                    </form>
                                </table>
                                
                                <?php include 'lista_departamento.inc'; ?>
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
                    include("footer.php");
                ?>
            </div>
            <!-- fim #footer -->
        </div>
    </body>
</html>
