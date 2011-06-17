<?php
    include_once 'default.php';
?>
                            <!-- inicio #conteudo -->
                            <div id="content">

                                <table class="table_form" align="center">
                                    <form name="cadcatarea" method="POST" action="cadastra_departamento.php">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Departamentos</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td>Nome:</td>
                                            <td><input id="departamento_nome" type="text" name="departamento_nome" /></td>
                                        </tr>
                                        <tr>
                                            <td>Descri&ccedil;&atilde;o:</td>
                                            <td><textarea id="departamento_descricao" name="departamento_descricao" cols="70" rows="5"></textarea></td>
                                        </tr>

                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right"> 
                                                <input type="reset" name="cadcatset_reset" value="Limpar" style="font-weight:bold" /> &nbsp; 
                                                <!--<input type="submit" name="cadcatset_edit" value="Editar" style="font-weight:bold" /> &nbsp; -->
                                                <input type="submit" name="cadcatset_enviar" value="Salvar" style="font-weight:bold"  /> 
                                            </td>

                                        </tr>
                                    </form>
                                </table>
                                
                                <?php include 'lista_departamento.inc'; ?>
                            </div>                                                      

                            <!-- fim #conteudo -->
                            <?php 
    include_once 'footer.php'; 
?>