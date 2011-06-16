<?php

session_start();

if(isset($_SESSION['usuario']))
{
   $id = $_SESSION['usuario'];

    include_once "config.php";
    include_once "grosso_pagina.php"; 
    
    echo '<div id="content">';
 
        $cargo_id = $_POST["editar_id"];
        
        //faz a consulta
        $query_2 = "SELECT * FROM cargo WHERE id_cargo = '$cargo_id' ";

        $result_2 = mysql_query($query_2);

        // Mensagem caso a consulta falhe.
        if ($result_2 === false)
        {
            echo "Não foi possível inserir os dados" . mysql_error()."<br />";  
        }
        else
        {   //mostra os dados numa tabela
            //busca a linha com os dados
             $row = mysql_fetch_assoc($result_2);
             
             //guarda o identificador do cargo
             $cargo_id = $row['id_cargo'];
         ?>

        

            <table class="table_form" align="center">

                <form  name="cadarea" method="POST" action="altera_cargos.php">
                    <tr>
                        <td class="tdh1top" colspan="5">Editar Cargos</td>
                    </tr>
                    <tr>
                        <td colspan="5">&nbsp; </td>
                     </tr>

                     <tr>
                        <td>Nome:</td>
                        <td colspan="3"><input type="text" name="cadcargo_nome" value="<? echo $row['nome_cargo'] ?>" size="60%" /></td>
                    </tr>
                    
                    <tr>
                      <td>Descri&ccedil;&atilde;o:</td>                                                             
                      <td>
                          <textarea name="cadcargo_descricao" cols="70" rows="5" value =""><? echo $row['descricao_cargo'] ?></textarea>
<!--                          <input type="t" name="cadcargo_descricao" value ="<? echo $row['descricao_cargo'] ?>"/>-->
                        </td>                                                                          
                      </tr>                                                                                          
                    <tr>
                        <td colspan="4">&nbsp; </td>
                    </tr>

                    <tr>
                        <td colspan="4" align="right"> 
                            <input type='hidden' name='editar' value="<? echo $cargo_id ?>" />
                            <input type="reset" name="reset" value="Limpar" style="font-weight:bold" /> &nbsp; 
                            <input type="submit" name="enviar" value="Salvar" style="font-weight:bold"  />
                        </td>
                    </tr>
                </form>
            </table>
           <a href= 'cargos.php'> Voltar </a>
        <? 
        include_once 'lista_cargos.inc'; 
        }
        ?>
        </div>
}
<?php    
    include_once 'grosso_fim_pagina.php';//escreve o cabeçalho da página
    $libera = mysql_free_result($result_2);
}
 else
 {
    echo"Você não está autorizado a visitar esta paǵina.";
}
?>
