<?php

session_start();

if(isset($_SESSION['usuario']))
{
   $id = $_SESSION['usuario'];

    include_once "config.php";
    include_once "grosso_pagina.php"; 
    
    $cargo_id = $_POST["excluir_id"];
        
        //faz a consulta
        $query = "SELECT * FROM cargo WHERE id_cargo ='$cargo_id' ";//sprintf("SELECT * FROM info")

        $result = mysql_query($query, $link);

        // Mensagem caso a consulta falhe.
        if ($result === false)
        {
            echo "Não foi possível verificar os dados" . mysql_error()."<br />";  
        }
        else
        {   
            //busca a linha com os dados
            $row = mysql_fetch_assoc($result);
            //mostra os dados numa tabela
            
            $cargo_id = $row['id_cargo'];
         ?>

        <div id='content'>

            <table class="table_form" align="center">

                <form  name="cadarea" method="POST" action="altera_cargos.php">
                    <tr>
                        <td class="tdh1top" colspan="4">Tem certeza de que gostaria de apagar os dados abaixo?</td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp; </td>
                     </tr>

                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="cadcago_nome" value ="<? echo $row['nome_cargo'] ?>" /></td>
                   </tr>
                    <tr>
                        <td>Descri&ccedil;&atilde;o:</td>
                        <td><input type="text" name="cadcargo_descricao" value="<? echo $row['descricao_cargo'] ?>" /></td>
                    </tr>

                                                                                 
                    <tr>
                        <td colspan="4">&nbsp; </td>
                    </tr>

                    <tr>
                        <td colspan="4" align="right"> 
                            <input type='hidden' name='excluir_id' value="<? echo $cargo_id ?>" />
                            <input type="submit" name="excluir" value="Excluir" style="font-weight:bold"  />
                        </td>
                    </tr>
                </form>
            </table>
            <a href='cargos.php'><strong> Voltar </strong></a>
    <?php    
        include_once 'lista_cargos.inc';
        $libera = mysql_free_result($result);
    echo "</div>";
    include_once 'grosso_fim_pagina.php';
    }
   }
   else
   {
       echo "Você não está autorizado a acessar esta página.";
   }
?>
