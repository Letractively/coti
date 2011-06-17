
<!--Página 

-->

<?php

   include_once 'funcoes.php';
   include_once 'data.php';
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <!-- inicio #menu -->
        <div id="menu">
            <ul>
                <li class="current_page_item"><a href="index2.php">Home</a></li>
                <li><a href="#">Administrar</a></li>
                <li><a href="#">Gerenciar</a></li>
                <li><a href="dod_f1.php">Solicitar</a></li>
                <li><a href="#">Buscar</a></li>
                <!--<li><a href="#">Item 5</a></li>
                <li><a href="#">Item 6</a></li>-->
            </ul> 
            <div id="data" align="right">
                <strong><?php seta_data_hora(); ?></strong> &nbsp;
            </div>
        </div>
        <!--   data e hora-->

        <!-- fim #menu -->
    </body>
</html>
