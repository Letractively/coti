<?php


include_once 'grosso_pagina.php';//escreve o topo da página
include_once "config.php";

echo "<div id='content'>";

$erro = array();//arry com os erros encontrados
foreach ($_POST as $chv => $value) 
{
    if($value=="")//substr($key, 0, 5)=="cadar"
    {
        $erro [] = "O campo". substr($chv, 6). "não foi informado";
    }
} 

$cod_setor = $_POST["cadar_cod"];
$sigla_setor = $_POST["cadar_sigla"];
$nome_setor = $_POST["cadar_nome"];
$email_setor = $_POST["cadar_email"];
$tel_setor = $_POST["cadar_tel"];
$departamento_setor = $_POST["cadar_dep"];

  
$query = "INSERT INTO setor VALUES (NULL, '$cod_setor','$nome_setor', '$sigla_setor', '$email_setor', '$tel_setor', '$departamento_setor')";
$result = mysql_query($query, $link);

// Mensagem caso a consulta falhe.
if ($result === false)
{
    echo "Não foi possível inserir os dados" . mysql_error()."<br />";
    
}
else
{   //mostra os dados numa tabela
   include_once 'lista_setor.inc';
//    echo "<table class ='table_form'>";
//    echo "<tr>";
//    echo "<td class='tdh1top' colspan='4'> Setores</td>";
//    echo "</tr>";
//    echo "<tr>";
//    echo "<td  class ='tdh1to' colspan='4'> seus dados foram inseridos com sucesso! </td>";
//    echo "</tr>";
//    echo "</table>";
    ////////////////////////////////////
    
    
    
//    //Lista os departamentos cadastrados
//    
//    $query_2 = "SELECT sigla_setor, nome_setor, tel_setor, departamento_setor FROM setor";//sprintf("SELECT * FROM info")
//    //$query_2 = "SELECT * FROM setor";//sprintf(
//    $result_2 = mysql_query($query_2);
//    
//    if($result_2 === false)
//    {
//        echo "Não foi possível buscar os dados" . mysql_error()."<br />";
//    }
//    else
//    {
//
//       $numlinha = mysql_num_rows($result_2);
//
//       echo "<table class ='table_form'>";
//       echo "<tr>";
//       echo "<td class='tdh1top' colspan='4'>Setores</td>";
//       echo "</tr>";
//       //$nomecoluna = mysql_field_name($result, $i);
//       echo "<tr>";
//       echo "<td colspan='4'> Existem ". $numlinha . "  setores cadastrados </td>";
//       echo "</tr>";
//       if($numlinha > 0)
//       {
//            
//            echo "<tr >";//bgcolor= '#336B00's
//            $numcoluna = mysql_num_fields($result_2); // diz o numero de colunas
//
//            // lista o os nomes das colunas
//            for($i = 0; $i < $numcoluna ; $i++)
//            {
//                echo "<td class='tdh1top'>".mysql_field_name($result_2, $i)."</td>";
//            }
//            echo "<tr />";
//
//            //mostra os campos 
//            while ($row = mysql_fetch_assoc($result_2))
//            {
//                 echo "<tr>";
//                    //echo "<td> ".$row['id_setor']."</td>";
//                    //echo "<td> ".$row['cod_setor']."</td>" ;
//                    echo "<td> ".$row['sigla_setor']."</td>" ;
//                    echo "<td> ".$row['nome_setor']."</td>" ;
//                    //echo "<td> ".$row['email_setor']."</td>" ;
//                    echo "<td> ".$row['tel_setor']."</td>" ;
//                    echo "<td> ".$row['departamento_setor']."</td>" ;
//                 echo "<tr />";
//            }
//       }
//    ///////////////////////////////////////
//    echo "</table>";
//    echo "<a href= 'setores.php'> Voltar </a>";  
//  }    
}
echo "</div>";
$libera = mysql_free_result($result);
$libera = mysql_free_result($result_2);
include_once 'grosso_fim_pagina.php';//escreve o cabeçalho da página

?>