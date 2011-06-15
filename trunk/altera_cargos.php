<?php

session_start();

if(isset($_SESSION['usuario']))
{
   $id = $_SESSION['usuario'];

    include_once "config.php";
    include_once "grosso_pagina.php"; 
   
    echo "<div id='content'>";
    
    if(isset($_POST["excluir_id"]))//Verifica se a variável foi postada
    {
         $cargo_id = $_POST["excluir_id"];

         $sql = "DELETE FROM cargo WHERE id_cargo = '$cargo_id'"; //Deleta o registro
         $result = mysql_query($sql) ;//or die(mysql_error()); //Verifica se o comando foi executado
         // Mensagem caso a consulta falhe.
        if ($result === false)
        {
            echo "Não foi possível inserir os dados" . mysql_error()."<br />";

        }
        else
        {
         echo "Dados excluidos com sucesso. <br />";
         
         include_once 'lista_cargos.inc';
         
         echo "<a href= 'cargos.php'> Voltar </a>";  
        }
    }
    if(isset($_POST["editar"]))    
    {
         
        $cargo_id = $_POST["editar"];
        $nome_cargo = $_POST["cadcargo_nome"];
        $descricao_cargo = $_POST["cadcargo_descricao"];

        $query  = "UPDATE cargo SET nome_cargo='$nome_cargo', descricao_cargo='$descricao_cargo' WHERE id_cargo = '$cargo_id';"; 
        $result = mysql_query($query, $link); //Verifica se os registros foram alterados

        // Mensagem caso a consulta falhe.
        if ($result === false)
        {
            echo "Não foi possível inserir os dados" . mysql_error()."<br />";

        }
        else
        {   //mostra os dados numa tabela

            echo "<table class ='table_form'>";
            echo "<tr>";
            echo "<td class='tdh1top' colspan='4'> Cargos </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td  class ='tdh1to' colspan='4'> seus dados foram alterados com sucesso! </td>";
            echo "</tr>";
            echo "</table>";
            ////////////////////////////////////
            //Lista os departamentos cadastrados
            include_once 'lista_cargo.inc';

            echo "<a href= 'cargos.php'> Voltar </a>";  
          }    
        }
        
    
    echo "</div>";
    $libera = mysql_free_result($result);
    //$libera = mysql_free_result($result_2);
    include_once 'grosso_fim_pagina.php';//escreve o fim do cabeçalho da página
}
else
{
    echo "Vocẽ não está autorizado a acessa esta página.";
}
?>
