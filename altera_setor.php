<?php

session_start();

if(isset($_SESSION['usuario']))
{
   $id = $_SESSION['usuario'];

    include_once "config.php";
    include_once "default.php"; 
    echo "<div id='content'>";
    
    if(isset($_POST["excluir_id"]))//Verifica se a variável foi postada
    {
         $setor_id = $_POST["excluir_id"];

         $sql = "DELETE FROM setor WHERE id_setor = '$setor_id'"; //Deleta o registro
         $result = mysql_query($sql) ;//or die(mysql_error()); //Verifica se o comando foi executado
         // Mensagem caso a consulta falhe.
        if ($result === false)
        {
            echo "Não foi possível inserir os dados" . mysql_error()."<br />";

        }
        else
        {
         echo "Dados excluidos com sucesso. <br />";
         
         include_once 'lista_setor.inc';
         
         echo "<a href= 'setores.php'> <strong> << Voltar </strong></a>";
        }
    }
    if(isset($_POST["editar"]))    
    {
         
        $setor_id = $_POST["editar"];
        $cod_setor = $_POST["cadar_cod"];
        $sigla_setor = $_POST["cadar_sigla"];
        $nome_setor = $_POST["cadar_nome"];
        $email_setor = $_POST["cadar_email"];
        $tel_setor = $_POST["cadar_tel"];
        $departamento_setor = $_POST["cadar_dep"];

        $query  = "UPDATE setor SET cod_setor='$cod_setor', sigla_setor='$sigla_setor', nome_setor='$nome_setor', email_setor='$email_setor', tel_setor ='$tel_setor', departamento_setor='$departamento_setor' WHERE id_setor = '$setor_id';"; 
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
            echo "<td class='tdh1top' colspan='4'> Setores</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td  class ='tdh1to' colspan='4'> seus dados foram alterados com sucesso! </td>";
            echo "</tr>";
            echo "</table>";
            ////////////////////////////////////
            //Lista os departamentos cadastrados
            include_once 'lista_setor.inc';
//            $query_2 = "SELECT sigla_setor, nome_setor, tel_setor, departamento_setor FROM setor";//sprintf("SELECT * FROM info")
//            //$query_2 = "SELECT * FROM setor";//sprintf(
//            $result_2 = mysql_query($query_2);
//
//            if($result_2 === false)
//            {
//                echo "Não foi possível buscar os dados" . mysql_error()."<br />";
//            }
//            else
//            {
//
//               $numlinha = mysql_num_rows($result_2);
//
//               echo "<table class ='table_form'>";
//               echo "<tr>";
//               echo "<td class='tdh1top' colspan='4'>Setores</td>";
//               echo "</tr>";
//               //$nomecoluna = mysql_field_name($result, $i);
//               echo "<tr>";
//               echo "<td colspan='4'>  Setor alterado com sucesso. </td>";
//               echo "</tr>";
//               if($numlinha > 0)
//               {
//
//                    echo "<tr >";//bgcolor= '#336B00's
//                    $numcoluna = mysql_num_fields($result_2); // diz o numero de colunas
//
//                    // lista o os nomes das colunas
//        //            for($i = 0; $i < $numcoluna ; $i++)
//        //            {
//        //                echo "<td class='tdh1top'>".mysql_field_name($result_2, $i)."</td>";
//        //            }
//                    echo "<td class='tdh1top'>Sigla</td>";
//                    echo "<td class='tdh1top'>Nome</td>";
//                    echo "<td class='tdh1top'>Telefone</td>";
//                    echo "<td class='tdh1top'>Departamento</td>";
//
//                    echo "<tr />";
//
//                    //mostra os campos 
//                    while ($row = mysql_fetch_assoc($result_2))
//                    {
//                         echo "<tr>";
//                            //echo "<td> ".$row['id_setor']."</td>";
//                            //echo "<td> ".$row['cod_setor']."</td>" ;
//                            echo "<td> ".$row['sigla_setor']."</td>" ;
//                            echo "<td> ".$row['nome_setor']."</td>" ;
//                            //echo "<td> ".$row['email_setor']."</td>" ;
//                            echo "<td> ".$row['tel_setor']."</td>" ;
//                            echo "<td> ".$row['departamento_setor']."</td>" ;
//                         echo "<tr />";
//                    }
//               }
//            ///////////////////////////////////////
//            echo "</table>";
            echo "<a href= 'setores.php'> <strong> << Voltar </strong></a>";  
          }    
        }
        
    
    echo "</div>";
    $libera = mysql_free_result($result);
    //$libera = mysql_free_result($result_2);
    include_once 'footer.php';//escreve o fim do cabeçalho da página
}
else
{
    echo "Vocẽ não está autorizado a acessa esta página.";
}
?>
