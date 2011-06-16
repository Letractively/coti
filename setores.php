<?php 

session_start();

if(isset($_SESSION['usuario']))
{
$id = $_SESSION['usuario'];
  
include_once 'grosso_pagina.php';
?>


<div id="content">

    <table class="table_form" align="center">
        <form  name="cadarea" method="POST" action="cadastra_setor.php">
            <tr>
                <td class="tdh1top" colspan="4">Cadastrar Setores</td>
            </tr>
            <tr>
                <td colspan="4">&nbsp; </td>
             </tr>

            <tr>
                <td>C&oacute;digo:</td>
                <td><input type="text" name="cadar_cod" onBlur="checaVazios(this.value, cadar_cod)"/> </td>
           </tr>
            <tr>
                <td>Sigla:</td>
                <td><input type="text" name="cadar_sigla" onBlur="checaVazios(this.value, cadar_sigla)"/></td>
            </tr>

            <tr>
                <td>Nome:</td>
                <td colspan="3"><input type="text" name="cadar_nome" onSubmit="checaVazios(this.value, cadar_nome)" /> </td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td colspan="3"><input type="text" name="cadar_email" onSubmit="checaEmail(this.value)" /></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="cadar_tel" onSubmit="checaVazios(this.value, cadar_tel)" /></td>
            </tr>
            <tr>
              <td>Departamento:</td>                                                             
              <td>
                  <? include_once 'funcoes.php'; ?>
                  <?= lista_departarmento() ?>
                </td>                                                                          
              </tr>                                                                                          
            <tr>
                <td colspan="4">&nbsp; </td>
            </tr>
             <!-- <tr>
                 <td>Respons&aacute;vel:</td> 
                 <td><input type="text" name="cadar_resp" /></td>
                <td>SIAPE:</td>
                <td><input type="text" name="cadar_siape" /></td> 
            </tr> -->
            <tr>
                <td colspan="4" align="right"> 
                    <input type="reset" name="cadusuario_reset" value="Limpar" style="font-weight:bold" /> &nbsp; 
                    <input type="submit" name="cadusuario_enviar" value="Salvar" style="font-weight:bold"  />
                </td>
            </tr>
        </form>
    </table>

    <? include_once 'lista_setor.inc'; ?>
</div>

<?php 
    include_once 'grosso_fim_pagina.php';
 }
 else
 {
     echo "Você não está autorizado a acessar está página";
 }
?>