
<?php
/* 
 * Conexão com o banco
 *
 */

/* nós conectamos com localhost
 * $link = 'my sql_connect('localhost', 'mysql_user', 'mysql_password')'*/


$link = mysql_connect('localhost', 'coti', 'coti');
if (!$link)
{
    die('Não foi possível conectar: ' . mysql_error());
}

//mysql_close($link);

// Seleciona  BD agenda
$db_selected = mysql_select_db('coti', $link);
if (!$db_selected)
 {
	die ('banco não conectado : ' . mysql_error()); 
 }
 
?>
