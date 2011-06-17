<?php
    include_once 'default.php';
    include_once 'funcoes.php';
    include_once 'data.php';
?>
                            <!-- inicio #conteudo -->
                            <div id="content">

                                <table class="table_form" align="center">
                                    <form name="dod_f1" method="post" action="dod_f2.php">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Documento de Oficializa&ccedil;&atilde;o de Demanda</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">1 - Identifica&ccedil;&atilde;o da &Aacute;rea Requisitante da Solu&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                            <td>Unidade/Setor/Departamento:</td>
                                            <td> 
                                                <!-- Aqui deve conter o nome do setor em que o funcionário que abriu o DOD está cadastrado, forma atual apenas para teste -->
                                                    
                                                    <?= lista_depart() ?>
                                                
                                            </td>
                                            <td colspan="2">Data: <input type="text" name="dod_f1_data" id="dod_f1_data" class="caixa" value="<?php seta_data(); ?>"/> </td>
                                        </tr>
                                        <tr>
                                            <td>Nome do Projeto: </td>
                                            <td colspan="3"> <input type="text" name="dod_f1_nomeproj" id="dod_f1_nomeproj" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Resp. pela Demanda: </td>
                                             <!-- Aqui deve conter a lista de usuários da categoria do setor requisitante, nesse formato apenas para teste -->
                                            <td> 
                                                 <?= lista_user_setor() ?> 
                                            </td>
                                            <td>Tel. do Respons&aacute;vel: </td>
                                            <td> <input type="text" name="dod_f1_respdemtel" id="dod_f1_respdemtel" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail do Respons&aacute;vel: </td>
                                            <td> <input type="text" name="dod_f1_respmail" id="dod_f1_respmail" class="caixa" onfocus="blur()" /> </td>
                                            <td>SIAPE do Resp.: </td>
                                            <td> <input type="text" name="dod_f1_respsiape" id="dod_f1_respsiape" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Integrante Requisitante: </td>
                                             <!-- Aqui deve conter a lista de usuários da categoria do setor requisitante, nesse formato apenas para teste -->
                                            <td> 
                                                 <?= lista_user_setor() ?>
                                            </td>
                                            <td>Telefone do I.R.: </td>
                                            <td> <input type="text" name="dod_f1_intreqtel" id="dod_f1_intreqtel" class="caixa" onfocus="blur()" /></td>
                                        </tr>
                                        <tr>
                                            <td>E-mail do Int. Requisitante: </td>
                                            <td colspan="3"> <input type="text" name="dod_f1_intreqmail" id="dod_f1_intreqmail" class="caixa" onfocus="blur()" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Fonte de Recursos: </td>
                                            <td colspan="3"> <input type="text" name="dod_f1_fonterec" id="dod_f1_fonterec" /> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="text-align: right;"> <input type="reset" name="dod_f1_reset" value="Limpar" style="font-weight:bold" /> &nbsp; 
                                                <input type="submit" name="dod_f1_enviar" value="Próximo >>" style="font-weight:bold"  /> </td>

                                        </tr>

                                    </form>
                                </table>
                            </div>
                            <!-- fim #conteudo -->
                            <?php 
    include_once 'footer.php'; 
?>