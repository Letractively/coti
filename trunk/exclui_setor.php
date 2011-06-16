<?php
session_start();

if(isset($_SESSION['usuario']))
{
   $id = $_SESSION['usuario'];

    include_once "config.php";
    include_once "grosso_pagina.php"; 
    
    //echo "<div id='content'>";

        $setor_id = $_POST["excluir_id"];
        
        //faz a consulta
        $query = "SELECT * FROM setor WHERE id_setor ='$setor_id' ";//sprintf("SELECT * FROM info")

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
         ?>

        <div id='content'>

            <table class="table_form" align="center">

                <form  name="cadarea" method="POST" action="altera_setor.php">
                    <tr>
                        <td class="tdh1top" colspan="4">Tem certeza de que gostaria de apagar os dados abaixo?</td>
                    </tr>
                    <tr>
                        <td colspan="4">&nbsp; </td>
                     </tr>

                    <tr>
                        <td>C&oacute;digo:</td>
                        <td><input type="text" name="cadar_cod" value ="<? echo $row['cod_setor'] ?>" /></td>
                   </tr>
                    <tr>
                        <td>Sigla:</td>
                        <td><input type="text" name="cadar_sigla" value="<? echo $row['sigla_setor'] ?>" /></td>
                    </tr>

                    <tr>
                        <td>Nome:</td>
                        <td colspan="3"><input type="text" name="cadar_nome" value="<? echo $row['nome_setor'] ?>" size="60%" /></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td colspan="3"><input type="text" name="cadar_email" value="<? echo $row['email_setor'] ?>" size="60%" /></td>
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td><input type="text" name="cadar_tel" value ="<? echo $row['tel_setor'] ?>"/></td>
                    </tr>
                    <tr>
                      <td>Departamento:</td>                                                             
                      <td>
                        <input type="text" name="cadar_tel" value ="<? echo $row['departmento_setor'] ?>"/></td> 
                        </td>                                                                          
                      </tr>                                                                                          
                    <tr>
                        <td colspan="4">&nbsp; </td>
                    </tr>

                    <tr>
                        <td colspan="4" align="right"> 
                            <input type='hidden' name='excluir_id' value="<? echo $setor_id ?>" />
                            <input type="submit" name="excluir" value="Excluir" style="font-weight:bold"  />
                        </td>
                    </tr>
                </form>
            </table>
           <a href= 'setores.php'> Voltar </a>
    <?php    
        include_once 'lista_setor.inc';
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
