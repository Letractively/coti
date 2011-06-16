
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <!-- inicio #menu esquerdo -->
        <div id="sidebar">
            <ul>
                <li>
                    <!-- inicio #busca -->
                    <div id="search" >
                        <form method="get" action="#">
                            <div>
                                <input type="text" name="s" id="search-text" value="Busca r&aacute;pida..." onfocus="this.value='';" />
                                <input type="submit" id="search-submit" value="Buscar" />
                            </div>
                        </form>
                    </div>
                    <!-- fim #busca -->
                    <div style="clear: both;"></div>
                </li>
                <!-- inicio #sidebar administracao-->
                <li>
                    <div id="bar2">
                        <?php
                        $pg = $_GET['pg'];
                        $ext = ".php";
                        if (file_exists($pg . $ext)) {
                            include($pg . $ext);
                        } else {
                            include("sidebaradm.php");
                        }
                        ?>
                    </div>
                </li>
                <!-- fim #sidebar administracao -->
                <!-- inicio #sidebar gerenciar -->
                <li>
                    <div id="bar2">
                        <?php
                        $pg = $_GET['pg'];
                        $ext = ".php";
                        if (file_exists($pg . $ext)) {
                            include($pg . $ext);
                        } else {
                            include("sidebarger.php");
                        }
                        ?>
                    </div>
                </li>
                <!-- fim #sidebar gerenciaro -->
                <!-- inicio #sidebar usuario -->
                <li>
                    <div id="bar2">
                        <?php
                        $pg = $_GET['pg'];
                        $ext = ".php";
                        if (file_exists($pg . $ext)) {
                            include($pg . $ext);
                        } else {
                            include("sidebaruser.php");
                        }
                        ?>
                    </div>
                </li>
                <!-- fim #sidebar usuario -->

            </ul>
        </div>
        <!-- fim #menuesquerdo -->
    </body>
</html>
