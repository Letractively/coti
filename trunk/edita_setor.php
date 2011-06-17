<?php 

session_start();

if(isset($_SESSION['usuario']))
{
   $id = $_SESSION['usuario'];

    include_once "config.php";
    include_once "default.php"; 
 
        $setor_id = $_POST["editar_id"];

        //faz a consulta
        $query_2 = "SELECT id_setor, cod_setor, sigla_setor, nome_setor, tel_setor, departamento_setor FROM setor WHERE id_setor = '$setor_id' ";//sprintf("SELECT * FROM info")

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
         ?>

        <div id="content">

            <table class="table_form" align="center">

                <form  name="cadarea" method="POST" action="altera_setor.php">
                    <tr>
                        <td class="tdh1top" colspan="4">Editar Setores</td>
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
                          <input type="text" name="cadar_tel" value ="<? echo $row['departamento_setor'] ?>"/>
                        </td>                                                                          
                      </tr>                                                                                          
                    <tr>
                        <td colspan="4">&nbsp; </td>
                    </tr>

                    <tr>
                        <td colspan="4" align="right"> 
                            <input type='hidden' name='editar' value="<? echo $setor_id ?>" />
                            <input type="reset" name="reset" value="Limpar" style="font-weight:bold" /> &nbsp; 
                            <input type="submit" name="enviar" value="Salvar" style="font-weight:bold"  />
                        </td>
                    </tr>
                </form>
            </table>
           <a href= 'setores.php'> Voltar </a>
        <? 
        include_once 'lista_setor.inc'; 
        }
        ?>
        </div>
}
<?php

    $libera = mysql_free_result($result_2);
    
    include_once 'footer.php';//escreve o cabeçalho da página

}
 else
 {
    echo"Você não está autorizado a visitar esta paǵina.";
}
?>