<?php 
session_start();

if(isset($_SESSION['usuario']))
{
$id = $_SESSION['usuario'];

include_once 'default.php';
include_once 'funcoes.php';
?>
    <div id="content">

    <table class="table_form" align="center">
        <form name="cadcargo" method="post" action="cadastra_cargos.php">
            <tr>
                <td class="tdh1top" colspan="4">Cargos</td>
            </tr>
            <tr>
                <td colspan="4">&nbsp; </td>
            </tr>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="cadcargo_nome" /></td>
            </tr>
            <tr>
                <td>Descri&ccedil;&atilde;o:</td>
                <td><textarea name="cadcargo_descricao" cols="70" rows="5"></textarea></td>
            </tr>

            <tr>
                <td colspan="4">&nbsp; </td>
            </tr>
            <tr>
                <td colspan="4" align="right"> 
                    <input type="reset" name="cadcargo_reset" value="Limpar" style="font-weight:bold" /> &nbsp; 
<!--                    <input type="submit" name="cadcargo_edit" value="Editar" style="font-weight:bold" /> &nbsp; -->
                    <input type="submit" name="cadcargo_enviar" value="Salvar" style="font-weight:bold"  /> </td>

            </tr>
        </form>
    </table>
     
    <?php include_once "lista_cargos.inc"; ?>
        
    </div>                                                      
<?php 
include_once 'footer.php'; 
}
 else
 {
    echo "Você não está autorizado a  acessesar esta página.";   
}
?>

