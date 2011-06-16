<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
//include config.php;
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
	// Teste 1...
    //$_POST["cadu_login"] = "silvana";
    //$_POST["cadu_pass"] = "silvana";
    
    $user_login = $_POST["user_login"];
    $user_senha = $_POST["user_pass"];
    /*echo "$user_login<br>";
    echo "$user_senha";
    exit;*/
    
    function anti_ataque($_sql) {
			if(get_magic_quotes_gpc()) {
				$_sql = stripslashes($_sql);
			}
			return mysql_real_escape_string($_sql);
		}

		//echo "Teste 1...<br/>";
		
		$_sql = "SELECT * FROM user WHERE ";

                $_sql.= "user_login = '$user_login' AND ";
		$_sql.= "user_senha = '$user_senha'"; 
                //echo $_sql;
                //exit;
                
		$_res = mysql_query($_sql) or die('Não consegui conexão');
		if(mysql_num_rows($_res)>0) 
                {
                    $_resultado = mysql_fetch_assoc($_res);
                    echo "Bem vindo {$_resultado["user_nome"]}";
                    
                    //inicia a sessão
                    
                    session_start();

                    if (!isset($_SESSION['usuario']))
                    {
                     $_SESSION['usuario'] = $user_login;
                     //redireciona para a página principal
                    include 'index2.php';
                    }
                    else 
                    {
                    // $_SESSION['ount']++;
                     //redireciona para a página principal
                    include 'index2.php';
                    }
                    
                    
		}
                else 
                {
                    echo "Usuário ou Senha Inválido...Tente novamente";
		}
		
?>
