<?php
include_once "config.php";
//mostra os dados numa tabela
       
    //$query_2 = "SELECT id_cargo, nome_cargo FROM setor";//sprintf("SELECT * FROM info")
    $query_2 = "SELECT * FROM cargo";
    $result_2 = mysql_query($query_2);
    
    if($result_2 === false)
    {
        echo "Não foi possível buscar os dados" . mysql_error()."<br />";
    }
    else
    {

       $numlinha = mysql_num_rows($result_2);

       echo "<table class ='table_form'>";
       echo "<tr>";
       echo "<td class='tdh1top' colspan='4'>Cargos Cadastrados</td>";
       echo "</tr>";
       //$nomecoluna = mysql_field_name($result, $i);
       echo "<tr>";
       echo "<td colspan='4'> Existe ". $numlinha . "  cargo(s) cadastrado(s) </td>";
       echo "</tr>";
       if($numlinha > 0)
       {
            
            echo "<tr >";//bgcolor= '#336B00's
            $numcoluna = mysql_num_fields($result_2); // diz o numero de colunas

            // lista o os nomes das colunas
//            for($i = 0; $i < $numcoluna ; $i++)
//            {
//                echo "<td class='tdh1top'>".mysql_field_name($result_2, $i)."</td>";
                echo "<td class='tdh1top'>Nome</td>";
                echo "<td class='tdh1top'>Descricao</td>";
                echo "<td class='tdh1top'>Ação </td>";
//            }
            echo "<tr />";

            //mostra os campos 
            while ($row = mysql_fetch_assoc($result_2))
            {
                 $id_cargo = $row['id_cargo'];
                 echo "<tr>";
                    
                    echo "<td> ".$row['nome_cargo']."</td>" ;
                    echo "<td> ".$row['descricao_cargo']."</td>" ;
                    
                    echo "<td>";
                    
                    echo "<form name='editar' method ='post' action='edita_cargos.php' >";
                    echo "<input type='hidden' name='editar_id' value='".$id_cargo."' /> ";                  
                    echo "<input type='submit' name='editar' value='Editar' />";
                    echo "</form>";
            
                    echo "<form name='editar' method ='post' action='exclui_cargos.php' >";
                    echo "<input type='hidden' name='excluir_id' value='".$id_cargo."' />";
                    echo "<input type='submit' name='excluir' value='Excluir' />";
                    echo "</form>";
                    
                    echo "</td>";
                    
                 echo "<tr />";
            }
       }
    ///////////////////////////////////////
    echo "</table>";
    echo "<a href= 'cargos.php'> <strong> << Voltar </strong></a>";
      
}
echo "</div>";
//$libera = mysql_free_result($result);
$libera = mysql_free_result($result_2);
include_once 'grosso_fim_pagina.php';//escreve o cabeçalho da página

?>
