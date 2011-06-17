<?php


include_once "config.php";
//Lista os departamentos cadastrados
    
    $query_2 = "SELECT departamento_nome, departamento_descricao FROM departamento";//sprintf("SELECT * FROM info")
    //$query_2 = "SELECT * FROM setor";//sprintf(
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
       echo "<td class='tdh1top' colspan='4'>Departamentos Cadastrados</td>";
       echo "</tr>";
       //$nomecoluna = mysql_field_name($result, $i);
       echo "<tr>";
       echo "<td colspan='4'> Existe ". $numlinha . "  departamento(s) cadastrado(s) </td>";
       echo "</tr>";
       if($numlinha > 0)
       {
            
            echo "<tr >";//bgcolor= '#336B00'
//            $numcoluna = mysql_num_fields($result_2); // diz o numero de colunas
//
//            // lista o os nomes das colunas
//            for($i = 0; $i < $numcoluna ; $i++)
//            {
//                echo "<td class='tdh1top'>".mysql_field_name($result_2, $i)."</td>";
//            }
            echo "<td class='tdh1top'>Nome</td>";
            echo "<td class='tdh1top'>Descri&ccedil;&atilde;o</td>";
            echo "<td class='tdh1top'>Op&ccedil;&otilde;es </td>";
            echo "<tr />";

            //mostra os campos 
            while ($row = mysql_fetch_assoc($result_2))
            {
                 echo "<tr>";
                    
                    $id_departamento = $row['id_departamento'];
                    //echo "<td> ".$row['id_setor']."</td>";
                    //echo "<td> ".$row['cod_setor']."</td>" ;
                    echo "<td> ".$row['departamento_nome']."</td>" ;
                    echo "<td> ".$row['departamento_descricao']."</td>" ;
                    //echo "<td> ".$row['email_setor']."</td>" ;
                    //echo "<td> ".$row['tel_setor']."</td>" ;
                   //echo "<td> ".$row['departamento_setor']."</td>" ;
                    
                    echo "<td>";
                    
                        echo "<form name='editar' method ='post' action='edita_departamento.php' >";
                        echo "<input type='hidden' name='editar_id' value='".$id_departamento."' /> ";
                        echo "<input type='submit' name='editar' value='Editar' />";
                        echo "</form>";
    //                    echo $id_setor;
    //                    exit ();
                        echo "<form name='editar' method ='post' action='exclui_departamento.php' >";
                        echo "<input type='hidden' name='excluir_id' value='".$id_departamento."' />";
                        echo "<input type='submit' name='excluir' value='Excluir' />";
                        echo "</form>";
                    
                    echo "</td>";
                    
                 echo "<tr />";
            }
       }
    ///////////////////////////////////////
    echo "</table>";
    echo "<a href= 'departamentos.php'> <strong> << Voltar </strong></a>";  
    $libera = mysql_free_result($result_2);
  }    
?>
