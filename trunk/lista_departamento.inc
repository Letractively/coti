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
       echo "<td colspan='4'> Existem ". $numlinha . "  departamentos cadastrados </td>";
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
            echo "<tr />";

            //mostra os campos 
            while ($row = mysql_fetch_assoc($result_2))
            {
                 echo "<tr>";
                    //echo "<td> ".$row['id_setor']."</td>";
                    //echo "<td> ".$row['cod_setor']."</td>" ;
                    echo "<td> ".$row['departamento_nome']."</td>" ;
                    echo "<td> ".$row['departamento_descricao']."</td>" ;
                    //echo "<td> ".$row['email_setor']."</td>" ;
                    //echo "<td> ".$row['tel_setor']."</td>" ;
                   //echo "<td> ".$row['departamento_setor']."</td>" ;
                 echo "<tr />";
            }
       }
    ///////////////////////////////////////
    echo "</table>";
    echo "<a href= 'departamentos.php'> <strong> << Voltar </strong></a>";  
    $libera = mysql_free_result($result_2);
  }    
?>
