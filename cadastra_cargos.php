<?php


include_once "config.php";
include_once 'grosso_pagina.php';//escreve o topo da página

 echo "<div id='content'>";
//verifica se algum campo ficou vazio
//$_POST["cadcargo_nome"];
//$_POST["cadcargo_descricao"];


$erro = array();//arry com os erros encontrados
foreach ($_POST as $chv => $value) 
{
    if($value==" ")//substr($key, 0, 5)=="cadar"
    {
        $erro [] = "O campo". substr($chv,0,7). "não foi informado";
    }
} 

$nome_cargo = $_POST["cadcargo_nome"];
$descricao_cargo = $_POST["cadcargo_descricao"];

  
$query = "INSERT INTO cargo VALUES (NULL, '$nome_cargo', '$descricao_cargo')";
$result = mysql_query($query, $link);

// Mensagem caso a consulta falhe.
if ($result === false)
{
    echo "Não foi possível inserir os dados" . mysql_error()."<br />";
    
}
else
{   //mostra os dados numa tabela
   
    echo "<table class ='table_form'>";
    echo "<tr>";
    echo "<td class='tdh1top' colspan='4'> Cargos</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td  class ='tdh1to' colspan='4'> seus dados foram inseridos com sucesso! </td>";
    echo "</tr>";
    echo "</table>";
    ////////////////////////////////////
    //Lista os departamentos cadastrados
    
    //$query_2 = "SELECT id_cargo, nome_cargo FROM setor";//sprintf("SELECT * FROM info")
    $query_2 = "SELECT * FROM cargo";
    $result_2 = mysql_query($query_2);
    
    if($result_2 === false)
    {
        echo "Não foi possível buscar os dados" . mysql_error() . "<br />";
    }
    else
    {

       $numlinha = mysql_num_rows($result_2);

       echo "<table class ='table_form'>";
       echo "<tr>";
       echo "<td class='tdh1top' colspan='4'>Cargos</td>";
       echo "</tr>";
       //$nomecoluna = mysql_field_name($result, $i);
       echo "<tr>";
       echo "<td colspan='4'> Existem ". $numlinha . "  cargos cadastrados </td>";
       echo "</tr>";
       if($numlinha > 0)
       {
            
            echo "<tr >";//bgcolor= '#336B00's
            $numcoluna = mysql_num_fields($result_2); // diz o numero de colunas

            // lista o os nomes das colunas
            for($i = 0; $i < $numcoluna ; $i++)
            {
                echo "<td class='tdh1top'>".mysql_field_name($result_2, $i)."</td>";
            }
            echo "<tr />";

            //mostra os campos 
            while ($row = mysql_fetch_assoc($result_2))
            {
                 echo "<tr>";
                    
                    echo "<td> ".$row['id_cargo']."</td>" ;
                    echo "<td> ".$row['nome_cargo']."</td>" ;
                    echo "<td colspan='2'> ".$row['descricao_cargo']."</td>" ;
                    
                 echo "<tr />";
            }
       }
    ///////////////////////////////////////
    echo "</table>";
    echo "<a href= 'cargos.php'> Voltar </a>";  
  }    
}
echo "</div>";
$libera = mysql_free_result($result);
$libera = mysql_free_result($result_2);
include_once 'grosso_fim_pagina.php';//escreve o cabeçalho da página

?>
