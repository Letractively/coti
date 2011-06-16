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
                                    <form name="dod_f1" method="post" action="avc_f2.php">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Análise de Viabilidade da Contrata&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">1 - Nome da  Solu&ccedil;&atilde;o de Tecnologia da Informa&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"> <input type="text" name="dod_f1_nomeproj" id="dod_f1_nomeproj" /> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">2 - Requisitos de Neg&oacute;cios da &Aacute;rea Requisitante</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="4">2.1 - Necessidades de Neg&oacute;cio</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Necessidade 1: <input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">Id</td>
                                            <td colspan="3">Funcionalidade</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">2 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">3 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">4 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">5 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Necessidade 2: <input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">Id</td>
                                            <td colspan="3">Funcionalidade</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">2 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">3 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">4 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">5 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Necessidade 3: <input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">Id</td>
                                            <td colspan="3">Funcionalidade</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">2 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">3 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">4 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">5 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Necessidade 4: <input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">Id</td>
                                            <td colspan="3">Funcionalidade</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">2 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">3 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">4 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">5 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Necessidade 5: <input type="text" name="" id="" /></td>
                                        </tr>
                                        <tr>
                                            <td width="5px">Id</td>
                                            <td colspan="3">Funcionalidade</td>
                                        </tr>
                                        <tr>
                                            <td width="5px">1 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">2 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">3 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">4 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="5px">5 </td>
                                            <td><textarea name="" id="" cols="" rows="6"></textarea></td>
                                            <td colspan="2"><table border="0" width="100%">
                                                    <tr>
                                                        <td width="5px">Id</td>
                                                        <td>Atores Envolvidos</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">1 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">2 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">3 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">4 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5px">5 </td>
                                                        <td><input type="text" name="" id="" /></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="4">2.2 - Demais Requisitos</td>
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
