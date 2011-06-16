<?php include_once 'grosso_pagina.php';?>
	

<div id="content">

<table class="table_form" align="center">
    <tr>
        <td class="tdh1top" colspan="4">Cadastro de Usu&aacute;rios</td>
    </tr>
<!-- <tr>
        <td colspan="4">&nbsp; </td>
    </tr>
    <tr>
        <td colspan="4">
            <form name="fb_usuario" action="" method="">
                <fieldset><legend>Pesquisa:</legend>
                    <p><input type="text" size="80%" name="cadu_busca" />
                        <input type="submit" name="cadu_busca" value="Pesquisar" style="font-weight:bold" /> </p></fieldset></td>

            </form>

    </tr>-->

    <form name="f_usuario" action="cadastra_user.php" method="post">

        <tr>
            <td colspan="4">&nbsp; </td>
        </tr>

        <tr>
            <td width="20%">LOGIN:</td> <!--SIAPE: como não sei o algoritmo dos numeros siape-->
            <td><input id="cadu_login" type="text" name="cadu_login" size="50%" onBlur="checaVazios(this.value, cadu_login)" /></td>
        </tr>
        <tr>
            <td width="20%">CPF : </td>
            <td>
                <input type="text" name="cadu_cpf" size="50%" maxlength="11" id="cadu_cpf" onBlur="validaCPF()" value="" />
                <br /> &nbsp; Digite o n&uacute;mero do CPF sem utilizar os caracteres "." ou "-"

            </td>
        </tr>
        <tr>
            <td width="20%">Nome:</td>
            <td colspan="3"><input type="text" name="cadu_nome" size="60%" onBlur="checaVazios(this.value, cadu_nome)" /> </td>
        </tr>
        <tr>
            <td width="20%">E-mail:</td>
            <td colspan="3"><input type="text" name="cadu_email" onBlur="valida_email()" size="50%" /></td>
        </tr>
        <tr>
            <td width="20%">Telefone:</td>
            <td><input type="text" name="cadu_tel" onBlur="checaVazios(this.value, cadu_tel)" /></td>
        </tr>
<!--    <tr>
            <td width="20%">Categoria:</td>
            <td>
                <select name="cadu_cat" onfocus="DesabilitaUser()">
                    <option value="escolhercatr" selected="selected">Escolher Categoria</option>
                    <option value="escolheroutro">Outro Categoriator</option>
                </select>
            </td>
        </tr>-->
       <tr>
            <td width="20%">Cargo:</td>
            <td>
                <? include_once "funcoes.php"; ?>
                <?= lista_cargo() ?>
            </td>
        </tr>
        <tr>
            <td width="20%">Setor:</td>
            <td>                                      
                <? include_once "funcoes.php"; ?>
                <?= lista_setor() ?>
            </td>
        </tr>
        <tr>
            <td width="20%">Senha:</td>
            <td><input type="password" name="cadu_pass" onkeyup="mostra_seguranca_chave_img(this.value, this.form)" /> 
                Segurança: 
                <input name="seguranca" type="text" style="border: 0px; background-color:#fffff; text-decoration:italic;" />
            </td>
        </tr>
        <tr>
            <td width="20%">Confirmar Senha:</td>
            <td><input type="password" name="cadu_confpass" onblur="comprovaSenha()" /></td>
        </tr>
        <tr>
            <td colspan="4">&nbsp; </td>
        </tr>
    </form>
    <tr>
        <td colspan="4" align="center">
           <!-- <input type="submit" name="cadusuario_novo" value="Novo" style="font-weight:bold" onClick="HabilitaUser()" /> &nbsp;->
            <input type="submit" name="cadusuario_edit" value="Alterar" style="font-weight:bold" /> &nbsp;-->
            <input type="reset" name="cadusuario_reset" value="Limpar" style="font-weight:bold" /> &nbsp;
            <input type="submit" name="cadusuario_enviar" value="Salvar" style="font-weight:bold"  /> &nbsp;
            <!--<input type="submit" name="cadusuario_excluir" value="Excluir" style="font-weight:bold" /></td>-->
    </tr>
 
</table>
<?php include 'lista_usuario.inc'; ?>
</div>
<?php include_once 'grosso_fim_pagina.php';?>
