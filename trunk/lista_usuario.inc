<?php

    //Lista os usuarios cadastrados
    
    $query_2 = "SELECT user_login, user_nome, user_telefone, user_email FROM user";//sprintf("SELECT * FROM info")
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
       echo "<td class='tdh1top' colspan='4'>Usu&aacute;rios Cadastrados </td>";
       echo "</tr>";
       //$nomecoluna = mysql_field_name($result, $i);
       echo "<tr>";
       echo "<td colspan='4'> Existe ". $numlinha . " usu&aacute;rio(s) cadastrado(s) </td>";
       echo "</tr>";
       if($numlinha > 0)
       {
            
            echo "<tr >";//bgcolor= '#336B00's
//            $numcoluna = mysql_num_fields($result_2); // diz o numero de colunas
//
//            // lista o os nomes das colunas
//            for($i = 0; $i < $numcoluna ; $i++)
//            {
//                echo "<td class='tdh1top'>".mysql_field_name($result_2, $i)."</td>";
//            }
            echo "<td class='tdh1top'>Nome</td>";
            echo "<td class='tdh1top'>Login</td>";
            echo "<td class='tdh1top'>Telefone</td>";
            echo "<td class='tdh1top'>E-mail</td>";
            echo "<tr />";

            //mostra os campos 
            while ($row = mysql_fetch_assoc($result_2))
            {   
                 echo "<tr>";
                    echo "<td> ".$row['user_nome']."</td>" ;
                    echo "<td> ".$row['user_login']."</td>" ;
                    echo "<td> ".$row['user_telefone']."</td>" ;
                    echo "<td> ".$row['user_email']."</td>" ;
                 echo "<tr />";
                 
                 
            }
       }
    ///////////////////////////////////////
    echo "</table>";
    echo "<a href= 'usuario.php'> <strong> << Voltar </strong></a>"; 
      
$libera = mysql_free_result($result_2);
}

?>
