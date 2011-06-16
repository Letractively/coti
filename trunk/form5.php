<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>CoTI - Contrata&ccedil;&atilde;o de TI</title>
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    </head>
    <body>
        <div id="prin">
            <!-- inicio #header -->
            <div>
                <?php
                $pg = $_GET['pg'];
                $ext = ".php";
                if (file_exists($pg . $ext)) {
                    include($pg . $ext);
                } else {
                    include("header.php");
                }
                ?>
            </div>
            <!-- fim #header -->
            <!-- inicio wrapper -->
            <div id="wrapper">
                <!-- inicio #menu -->
                <div>
                    <?php
                    $pg = $_GET['pg'];
                    $ext = ".php";
                    if (file_exists($pg . $ext)) {
                        include($pg . $ext);
                    } else {
                        include("menu.php");
                    }
                    ?>
                </div>
                <!-- fim #menu -->
                <!-- inicio #pagina -->
                <div id="pagina">
                    <!-- inicio #pagina bgtopo -->
                    <div id="pagina-bgtopo">
                        <!-- inicio #pagina bgbtm -->
                        <div id="pagina-bgbtm">
                            <!-- inicio #menu esquerdo -->
                            <div id="bar">
                                <?php
                                $pg = $_GET['pg'];
                                $ext = ".php";
                                if (file_exists($pg . $ext)) {
                                    include($pg . $ext);
                                } else {
                                    include("sidebar.php");
                                }
                                ?>
                            </div>
                            <!-- fim #menuesquerdo -->
                            <!-- inicio #conteudo -->
                            <div id="content">

                                <table class="table_form" align="center">
                                    <form name="f5" method="get" action="#">
                                        <tr>
                                            <td class="tdh1top" colspan="4">Termo de Ci&ecirc;ncia</td>
                                        </tr>
                                        <tr>
                                            <td>Contrato N&ordm;: </td>
                                            <td colspan="3"> <input type="text" name="f5_contnum" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Objeto: </td>
                                            <td colspan="3"> <input type="text" name="f5_objt" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Gestor do Contrato: </td>
                                            <td> <input type="text" name="f5_gestcont" /> </td>
                                            <td>Matr&iacute;cula: </td>
                                            <td> <input type="text" name="f5_gestmat" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Cotratante: </td>
                                            <td colspan="3"> <input type="text" name="f5_contorg" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Contratada: </td>
                                            <td> <input type="text" name="f5_contr" /> </td>
                                            <td>CNPJ: </td>
                                            <td> <input type="text" name="f5_contrcnpj" /></td>
                                        </tr>
                                        <tr>
                                            <td>Preposto da  Contratada: </td>
                                            <td> <input type="text" name="f5_contrpre" /> </td>
                                            <td>CPF: </td>
                                            <td> <input type="text" name="f5_contrprecpf" /> </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><p>&nbsp;</p> <p> Por este instrumento, os funcion&aacute;rios abaixo-assinado declaram ter ci&ecirc;ncia e conhecer a declara&ccedil;&atilde;o de manuten&ccedil;&atilde;o de sigilo e das normas de seguran&ccedil;a vigentes na Contratante.</p>
                                                <p><center> ____________________________,    ________ de _____________________ de ________ </center>
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">Ci&ecirc;ncia</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="4">Contratada <br /> <em>Funcion&aacute;rios</em></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">Termo de Compromisso</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <p> Este Termo de  Compromisso (?Termo?) &eacute; celebrado entre:</p>

                                                <p>CONTRATANTE xxxxxxxxxxxxx, Endere&ccedil;o xxxxxxx, inscrita no CNPJ/MF xxxxx, personifica&ccedil;&atilde;o xxxxxx, neste ato representadas por seus respectivos procuradores abaixo assinados, na forma de seus respectivos Contratos Sociais, e</p>

                                                <p>CONTRATADA xxxxxxxxxxxxx, Endere&ccedil;o xxxxxxx, inscrita no CNPJ/MF xxxxx, personifica&ccedil;&atilde;o xxxxxx, neste ato representadas por seus respectivos procuradores abaixo assinados, na forma de seus respectivos Contratos Sociais.</p>

                                                <p>O &oacute;rg&atilde;o e a Empresa  podem ser referidas individualmente como Parte e coletivamente como Partes, onde o contexto assim o exigir.</p>

                                                <p>CONSIDERANDO QUE as Partes estabeleceram ou est&atilde;o considerando estabelecer uma rela&ccedil;&atilde;o de neg&oacute;cio que possa incluir, entre outras, uma ou mais das seguintes rela&ccedil;&otilde;es ("Rela&ccedil;&atilde;o"): servi&ccedil;os de marketing, consultas, pesquisa e desenvolvimento, fornecimento/venda, teste/ensaio, colabora&ccedil;&atilde;o, agenciamento, licita&ccedil;&atilde;o, ou qualquer outra parceria que envolva a divulga&ccedil;&atilde;o de Informa&ccedil;&otilde;es Confidenciais de uma Parte a outra;</p>

                                                <p>CONSIDERANDO QUE as Partes podem divulgar entre si Informa&ccedil;&atilde;es Confidenciais, conforme definido abaixo neste instrumento, sobre aspectos de seus respectivos neg&oacute;cios, e em considera&ccedil;&atilde;o da divulga&ccedil;&atilde;o destas Informa&ccedil;&otilde;es Confidenciais;</p>

                                                <p>CONSIDERANDO QUE as Partes desejam ajustar as condi&ccedil;&otilde;es de revela&ccedil;&atilde;o das Informa&ccedil;&otilde;es Confidenciais, bem como definir as regras relativas ao seu uso e prote&ccedil;&atilde;o;</p>

                                                <p>RESOLVEM as Partes celebrar o presente Termo de Compromisso de Manuten&ccedil;&atilde;o de Sigilo, o qual se reger&aacute; pelas considera&ccedil;&otilde;es acima, bem como pelas cl&aacute;usulas e condi&ccedil;&otilde;es a seguir:</p>
                                                <ol type="1">
                                                    <li>Para a finalidade deste Termo, "Informa&ccedil;&otilde;es Confidenciais" significar&atilde;o todas e quaisquer informa&ccedil;&otilde;es divulgadas por uma Parte (de acordo com este instrumento, a "Parte Divulgadora") &agrave; outra Parte (de acordo com este instrumento, a "Parte Recebedora"), em forma escrita ou verbal, tang&iacute;vel ou intang&iacute;vel, patenteada ou n&atilde;o, de natureza t&eacute;cnica, operacional, comercial, jur&iacute;dica, a qual esteja claramente marcada como CONFIDENCIAL, incluindo, entre outras, mas n&atilde;o se limitando a, segredos comerciais, know-how, patentes, pesquisas, planos de neg&oacute;cio, informa&ccedil;&atilde;es de marketing, informa&ccedil;&atilde;es de clientes, situa&ccedil;&atilde;o financeira, m&eacute;todos de contabilidade, t&eacute;cnicas e experi&ecirc;ncias acumuladas, e qualquer outra informa&ccedil;&atilde; t&eacute;cnica, comercial e/ou financeira, seja expressa em notas, cartas, fax, memorandos, acordos, termos, an&aacute;lises, relat&oacute;rios, atas, documentos, manuais, compila&ccedil;&otilde;es, c&oacute;digo de software, e-mail, estudos, especifica&ccedil;&atilde;es, desenhos, c&oacute;pias, diagramas, modelos, amostras, fluxogramas, programas de computador, discos, disquetes, fitas, pareceres e pesquisas, ou divulgadas verbalmente e identificadas como confidenciais por ocasi&atilde;o da divulga&ccedil;&atilde;o.</li>

                                                    <li>N&atilde;o ser&atilde;o inclu&iacute;das nas Informa&ccedil;&atilde;es Confidenciais quaisquer informa&ccedil;&otilde;es que: (i) sejam geralmente conhecidas, ou subsequentemente se tornem dispon&iacute;veis ao com&eacute;rcio ou ao p&uacute;blico; (ii) estejam na posse legal da Parte Recebedora antes da divulga&ccedil;&atilde;o pela Parte Divulgadora; ou (iii) sejam legalmente recebidas pela Parte Recebedora de um terceiro, desde que essas informa&ccedil;&otilde;es n&atilde;o tenham chegado ao conhecimento da Parte Recebedora atrav&eacute;s do referido terceiro, direta ou indiretamente, a partir da Parte Divulgadora numa base confidencial.</li>

                                                    <li>Quando a divulg&ccedil;&atilde;o de Informa&ccedil;&atilde;es Confidenciais for necess&aacute;ria para estrito atendimento de ordem judicial ou ag&ecirc;ncia governamental, o mesmo se proceder&aacute; da seguinte maneira: (i) a Parte Recebedora fica obrigada a comunicar o teor da determina&ccedil;&atilde;o judicial &agrave; Parte Divulgadora no prazo de 2 (dois) dias &uacute;teis a contar do recebimento da ordem, no caso de se tratar de determina&ccedil;&atilde;o para cumprimento em prazo m&aacute;ximo de 5 (cinco) dias; ou no prazo de uma hora a contar do recebimento, no caso de se tratar de ordem judicial para cumprimento no prazo m&aacute;ximo de at&eacute; 48 (quarenta e oito) horas; e (ii) fica a Parte Recebedora obrigada tamb&eacute;m a enviar a Parte Divulgadora c&oacute;pia da resposta dada &agrave; determina&ccedil;&atilde;o judicial ou administrativa concomitantemente ao atendimento da mesma. A Parte Recebedora cooperar&aacute; com a Parte Divulgadora para possibilitar que a Parte Divulgadora procure uma liminar ou outra medida de prote&ccedil;&atilde;o para impedir ou limitar a divulga&ccedil;&atilde;o dessas Informa&ccedil;&atilde;es Confidenciais.</li>

                                                    <li>A Parte Recebedora n&atilde;o divulgar&aacute; nenhuma Informa&ccedil;&atilde;o Confidencial da Parte Divulgadora a nenhum terceiro, exceto para a finalidade do cumprimento deste Termo e com o consentimento pr&eacute;vio por escrito da Parte Divulgadora. Al&eacute;m disso:</li>

                                                    <ol type="I">
                                                        <li>A Parte Recebedora, (i) n&atilde;o usar&aacute; as Informa&ccedil;&atilde;es Confidenciais para interferir, direta ou indiretamente, com nenhum neg&oacute;cio real ou potencial da Parte Divulgadora, e (ii) n&atilde;o usar&aacute; as Informa&ccedil;&otilde;es Confidenciais para nenhuma finalidade, exceto avaliar uma poss&iacute;vel rela&ccedil;&atilde;o estrat&eacute;gica entre as Partes.</li>

                                                        <li>As Partes dever&atilde;o proteger as Informa&ccedil;&atilde;es Confidenciais que lhe forem divulgadas, usando o mesmo grau de cuidado utilizado para proteger suas pr&oacute;prias Informa&ccedil;&otilde;es Confidenciais.</li>

                                                        <li>A Parte Recebedora n&atilde;o revelar&aacute;, divulgar&aacute;, transferir&aacute;, ceder&aacute;, licenciar&aacute; ou conceder&aacute; acesso a essas Informa&ccedil;&otilde;es Confidenciais, direta ou indiretamente, a nenhum terceiro, sem o pr&eacute;vio consentimento por escrito da Parte Divulgadora, estando este terceiro, condicionado &agrave; assinatura de um Termo de Compromisso de Manute&ccedil;&atilde;o de Sigilo  prevendo as mesmas condi&ccedil;&otilde;es e obriga&ccedil;&otilde;es estipuladas neste Termo.</li>

                                                        <li>A Parte Recebedora informar&aacute; imediatamente a Parte Divulgadora de qualquer divulga&ccedil;&atilde;o ou uso n&atilde;o autorizado das Informa&ccedil;&otilde;es Confidenciais da Parte Divulgadora por qualquer pessoa, e tomar&aacute; todas as medidas necess&aacute;rias e apropriadas para aplicar o cumprimento das obriga&ccedil;&otilde;es com a n&atilde;o-divulga&ccedil;&atilde;o e uso limitado das obriga&ccedil;&otilde;es das empreiteiras e agentes da Parte Recebedora.</li>

                                                        <li>A Parte Recebedora dever&aacute; manter procedimentos administrativos adequados &agrave; preven&ccedil;&atilde;o de extravio ou perda de quaisquer documentos ou Informa&ccedil;&otilde;es Confidenciais, devendo comunicar &agrave; Parte Divulgadora, imediatamente, a ocorr&ecirc;ncia de incidentes desta natureza, o que n&atilde;o excluir&aacute; sua responsabilidade.</li>

                                                        <li>A Parte Recebedora obrigar&aacute; seu pessoal que possa ter acesso &agrave;s Informa&ccedil;&otilde;es Confidenciais que cumpram tais obrig&ccedil;&otilde;es de sigilo.</li>
                                                    </ol>

                                                    <li>As Partes se comprometem e se obrigam a tomar todas as medidas necess&aacute;rias &agrave; prote&ccedil;&atilde;o da informa&ccedil;&atilde;o confidencial da outra Parte, bem como para evitar e prevenir revela&ccedil;&atilde;o a terceiros, exceto se devidamente autorizado por escrito pela Parte Divulgadora. De qualquer forma, a revela&ccedil;&atilde;o &eacute; permitida para empresas coligadas, assim consideradas as empresas que direta ou indiretamente controlem ou sejam controladas pela Parte neste Termo. Al&eacute;m disso, cada Parte ter&aacute; direito de revelar a informa&ccedil;&atilde;o a seus funcion&aacute;rios que precisem conhec&ecirc;-la, para os fins deste Termo; tais funcion&aacute;rios dever&atilde;o estar devidamente avisados acerca da natureza confidencial de tal informa&ccedil;&atilde;o, e estar&atilde;o vinculados aos termos e condi&ccedil;&otilde;es do presente  Termo de Compromisso de Manuten&ccedil;&atilde;o de Sigilo independentemente de terem sido avisados do car&aacute;ter confidencial da informa&ccedil;&atilde;, ficando a Parte Recebedora respons&aacute;vel perante a Parte Divulgadora por eventual descumprimento do Termo.</li>

                                                    <li>O interc&acirc;mbio de informa&ccedil;&atilde;es nos termos deste instrumento n&atilde;o ser&atilde;o interpretados de maneira a constituir uma obriga&ccedil;&atilde;o de uma das Partes para celebrar qualquer Termo ou acordo de neg&oacute;cio, nem obrigat&oacute;rio a comprar quaisquer produtos ou servi&ccedil;os da outra ou oferecer para a venda quaisquer produtos ou servi&ccedil;os usando ou incorporando as Informa&ccedil;&otilde;es Confidenciais.</li>

                                                    <li>Cada Parte reconhece que em nenhuma hip&oacute;tese este Termo ser&aacute; interpretado como forma de transfer&ecirc;ncia de propriedade ou qualquer tipo de direito subsistido nas Informa&ccedil;&atilde;es Confidenciais da Parte Divulgadora para a Parte Recebedora, exceto o direito limitado para utilizar as Informa&ccedil;&otilde;es Confidenciais conforme estipulado neste Termo.</li>

                                                    <li>Este Termo entrar&aacute; em vigor por ocasi&atilde;o da assinatura pelas Partes. Os compromissos deste instrumento tamb&eacute;m ser&aacute;o obrigat&oacute;rios &agrave;s coligadas, subsidirias ou sucessoras das Partes e continuar&aacute; a ser obrigat&oacute;rio a elas a&eacute; a ocas&atilde;o em que a subst&acirc;ncia das Informa&ccedil;&otilde;es Confidenciais tenha ca&iacute;do no dom&iacute;nio p&uacute;blico sem nenhum descumprimento ou neglig&ecirc;ncia por parte da Parte Recebedora, ou at&eacute; que a permiss&atilde;o para liberar essas Informa&ccedil;&otilde;es seja especificamente concedida por escrito pela Parte Divulgadora.</li>

                                                    <li>A omiss&atilde;o ou atraso em aplicar qualquer disposi&ccedil;&atilde;o deste Termo n&atilde;o constituir&aacute; uma renncia de qualquer aplica&ccedil;&atilde;o futura dessa disposi&ccedil;&atilde;o ou de quaisquer de seus termos. Se qualquer disposi&ccedil;&atilde;o deste Termo, ou sua aplica&ccedil;&atilde;o, por qualquer raz&atilde;o e em qualquer medida for considerada inv&aacute;lida ou inexequ&aacute;vel, o restante deste Termo e a aplica&ccedil;&atilde;o de tal disposi&ccedil;&atilde;o a outras pessoas e/ou circunst&acirc;ncias ser&atilde;o interpretados da melhor maneira poss&iacute;vel para atingir a inten&ccedil;&atilde;o das Partes signat&oacute;rias.</li>

                                                    <li>As Partes concordam que a viola&ccedil;&atilde;o do presente Termo, pelo uso de qualquer Informa&ccedil;&atilde;o Confidencial pertencente &agrave; Parte Divulgadora, sem sua devida autoriza&ccedil;&atilde;o, causar-lhe-&aacute; danos e preju&iacute;zos irrepar&aacute;veis, para os quais n&atilde;o existe rem&eacute;dio na lei. Desta forma, a Parte Divulgadora poder&aacute;, imediatamente, tomar todas as medidas extrajudiciais e judiciais, inclusive de ca&aacute;ter cautelar, como antecipa&ccedil;&atilde;o de tutela jurisdicional, que julgar cab&iacute;veis &agrave; defesa de seus direitos.</li>

                                                    <li>A Parte Recebedora dever&aacute; devolver, &iacute;ntegros e integralmente, todos os documentos a ela fornecidos, inclusive as c&oacute;pias porventura necess&aacute;rias, na data estipulada pela Parte Reveladora para entrega, ou quando n&atilde;o mais for necess&aacute;ria a manuten&ccedil;&atilde;o das Informa&ccedil;&otilde;es Confidenciais, comprometendo-se a n&atilde;o reter quaisquer reprodu&ccedil;&otilde;es (incluindo reprodu&ccedil;&otilde;es magn&eacute;ticas), c&oacute;pias ou segundas vias, sob pena de incorrer nas penalidades previstas neste Termo.</li>

                                                    <li>A Parte Recebedora dever&aacute; destruir quaisquer documentos por ela produzidos que contenham Informa&ccedil;&otilde;es Confidenciais da Parte Divulgadora, quando n&atilde;o mais for necess&aacute;ria a manuten&ccedil;&atilde;o dessas Informa&ccedil;&atilde;es Confidenciais, comprometendo-se a n&atilde;o reter quaisquer reprodu&ccedil;&otilde;es (incluindo reprodu&ccedil;&otilde;es magn&eacute;ticas), c&oacute;pias ou segundas vias, sob pena de incorrer nas penalidades previstas neste Termo.</li>

                                                    <li>A n&atilde;o-observ&acirc;ncia de quaisquer das dispos&ccedil;&otilde;es de confidencialidade estabelecidas neste Termo sujeitar&aacute; a Parte infratora, como tamb&eacute;m o agente causador ou facilitador, por a&ccedil;&atilde;o ou omiss&atilde;o de qualquer daqueles relacionados neste Termo, ao pagamento, ou recomposi&ccedil;&atilde;o, de todas as perdas e danos, comprovadamente suportados e demonstrados pela outra Parte, bem como as de responsabilidades civil e criminal respectivas, as quais ser&atilde;o apuradas em regular processo.</li>

                                                    <li>As obriga&ccedil;&otilde;es de confidencialidade decorrentes do presente Termo, tanto quanto as responsabilidades e obriga&ccedil;&otilde;es outras derivadas do presente Termo, vigorar&atilde;o durante o per&iacute;odo de 5 (cinco) anos ap&oacute;s a divulga&ccedil;&atilde;o de cada Informa&ccedil;&atilde;o Confidencial &agrave; Parte Recebedora.</li>

                                                    <li>O n&atilde;o-exerc&iacute;cio por qualquer das uma das Partes de direitos assegurados neste instrumento n&atilde;o importar&aacute; em ren&uacute;ncia aos mesmos, sendo tal ato considerado como mera toler&acirc;ncia para todos os efeitos de direito.</li>

                                                    <li>Altera&ccedil;&atilde;es do n&uacute;mero, natureza e quantidade das Informa&ccedil;&otilde;es Confidenciais disponibilizadas para a Parte Recebedora n&atilde;o descaracterizar&atilde;o ou reduzir&atilde;o o compromisso ou as obriga&ccedil;&otilde;es pactuadas neste Termo de Compromisso de Manuten&ccedil;&atilde;o de Sigilo, que permanecer&aacute; v&aacute;lido e com todos os seus efeitos legais em qualquer das situa&ccedil;&otilde;es tipificadas neste Termo.</li>

                                                    <li>O acr&eacute;scimo, complementa&ccedil;&atilde;o, substitui&ccedil;&atilde;o ou esclarecimento de qualquer das Informa&ccedil;&otilde;es Confidenciais disponibilizadas para a Parte Recebedora, em raz&atilde;o do presente objetivo, ser&atilde;o incorporadas a este Termo, passando a fazer dele parte integrante, para todos os fins e efeitos, recebendo tamb&eacute;m a mesma prote&ccedil;&atilde;o descrita para as informa&ccedil;&otilde;es iniciais disponibilizadas, n&atilde;o sendo necess&aacute;rio, nessas hip&oacute;teses, assinatura ou formaliza&ccedil;&atilde;o de Termo Aditivo.</li>

                                                    <li>Este instrumento n&atilde;o deve ser interpretado como cria&ccedil;&atilde;o ou envolvimento das Partes, ou suas Afiliadas, nem em obriga&ccedil;&atilde;o de divulgar informa&ccedil;&otilde;es confidenciais para a outra Parte.</li>

                                                    <li>O fornecimento de Informa&ccedil;&atilde;es Confidenciais pela Parte Divulgadora ou por uma de suas Afiliadas n&atilde;o implica em ren&uacute;ncia, cess&atilde;o a qualquer t&iacute;tulo, autoriza&ccedil;&atilde;o de uso, aliena&ccedil;&atilde;o ou transfer&ecirc;ncia de nenhum direito, j&aacute; obtido ou potencial, associado a tais informa&ccedil;&atilde;es, que permanecem como propriedade da Parte Divulgadora ou de suas Afiliadas, para os fins que lhe aprouver.</li>

                                                    <li>Nenhum direito, licen&ccedil;a, direito de explora&ccedil;&atilde;o de marcas, inven&ccedil;&otilde;es, direitos autorais, Patentes ou direito de propriedade intelectual est&atilde;o aqui impl&iacute;citos, inclu&iacute;dos ou concedidos por meio do presente Termo, ou ainda, pela transmiss&atilde;o de Informa&ccedil;&otilde;es Confidenciais entre as Partes.</li>

                                                    <li>A Contratada declara conhecer todas as Normas, Pol&iacute;ticas e Procedimentos de Seguran&ccedil;a estabelecidas pela Contratante para execu&ccedil;&atilde;o do Contrato, tanto nas depend&ecirc;ncias da Contratante como externamente.</li>

                                                    <li>A Contratada responsabilizar-se-&aacute;  integralmente e solidariamente, pelos atos de seus empregados praticados nas depend&ecirc;ncias da Contratante, ou mesmo fora dele, que venham a causar danos ou colocar em risco o patrim&ocirc;nio da Contratante.</li>

                                                    <li>Este Termo cont&eacute;m o acordo integral entre as Partes com rela&ccedil;&atilde;o ao seu objeto. Quaisquer outros acordos, declara&ccedil;&otilde;es, garantias anteriores ou contempor&acirc;neos com rela&ccedil;&atilde;o &agrave; prote&ccedil;&atilde;o das Informa&ccedil;&otilde;es Confidenciais, verbais ou por escrito, ser&atilde;o substitu&iacute;dos por este Termo. Este Termo ser&aacute; aditado somente firmado pelos representantes autorizados de ambas as Partes.</li>

                                                    <li>Quaisquer controv&eacute;rsias em decorr&ecirc;ncia deste Termo ser&atilde;o solucionadas de modo amistoso atrav&eacute;s do representante legal das Partes, baseando-se nas leis da Rep&uacute;blica Federativa do Brasil. XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX. Verificar<br />
                                                        E, por estarem assim justas e contratadas, as Partes firmam o presente Instrumento em 03 (tr&ecirc;s) vias de igual teor e forma, na presen&ccedil;a das testemunhas abaixo indicadas.</li>
                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tdh2top" colspan="4">De Acordo</td>
                                        </tr>
                                        <tr>
                                            <td class="tdh3top" colspan="2">Contratante</td>
                                            <td class="tdh3top" colspan="2">Contratada</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                            <td colspan="2" align="center"><p>&nbsp;</p><p>_________________________________________<br>
                                                    Nome </p> <br />Matr&iacute;cula:<p>&nbsp;</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right"> <input type="reset" name="f1_reset" value="Limpar" style="font-weight:bold" /> &nbsp; <input type="submit" name="f1_edit" value="Editar" style="font-weight:bold" /> &nbsp; <input type="submit" name="f1_enviar" value="Salvar" style="font-weight:bold"  /> </td>

                                        </tr>
                                    </form>
                                </table>
                            </div>

                            <!-- fim #conteudo -->
                            <div style="clear: both;"></div>
                        </div>
                        <!-- fim #pagina bgbtm -->
                    </div>
                    <!-- fim #pagina tbgopo -->
                </div>
                <!-- fim #pagina -->
            </div>
            <!-- fim wrapper -->
            <!-- inicio footer -->
            <div>
                <?php
                                $pg = $_GET['pg'];
                                $ext = ".php";
                                if (file_exists($pg . $ext)) {
                                    include($pg . $ext);
                                } else {
                                    include("footer.php");
                                }
                ?>
            </div>
            <!-- fim #footer -->
        </div>
    </body>
</html>
