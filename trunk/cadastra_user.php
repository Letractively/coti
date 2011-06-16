<?php
session_start();

if(isset($_SESSION['usuario']))
{
     $id = $_SESSION['usuario'];

     include "config.php";
    include_once 'grosso_pagina.php';


    echo "<div id='content'>";
    //verifica se todos os campos foram preenchidos
    $erro = Array(); // Array com os erros encontrados
            //verifica se existe algum campo não informado
            foreach($_POST as $key => $vlr)
            {
                    if($vlr=="")
                    {
                            $erro[] = "O campo " . substr($key,4) . " Não foi informado";
                    }
            }

     $user_nome = $_REQUEST["cadu_nome"];       
     $user_login = $_REQUEST["cadu_login"];
     $user_senha = $_REQUEST["cadu_pass"];
     //$user_categoria = $_POST["cadu_cat"];
     $user_email = $_REQUEST["cadu_email"];
     $user_cpf = $_REQUEST["cadu_cpf"];
     $user_telefone = $_REQUEST["cadu_tel"];
     $user_cargo = $_REQUEST["cadu_cargo"];
     $user_setor = $_REQUEST["cadu_setor"];


    $sql = "INSERT INTO user VALUES (NULL,'$user_login','$user_nome', '$user_senha', NULL,'$user_email','$user_cpf', '$user_telefone','$user_cargo','$user_setor')";
    $result = mysql_query($sql);

        // Mensagem caso a consulta falhe.
        if ($result === false)
        {
            echo "Não foi possível inserir os dados" . mysql_error()."<br />";

        }
        else
        {   //mostra os dados numa tabela

            echo "<table class ='table_form'>";
            echo "<tr>";
            echo "<td class='tdh1top' colspan='4'>Usuarios</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td  class ='tdh1to' colspan='4'> Seus dados foram inseridos com sucesso! </td>";
            echo "</tr>";
            echo "</table>";
            ////////////////////////////////////
            //Lista os usuarios cadastrados
            include_once 'lista_usuario.inc';

            echo "<a href= 'usuario.php'> Voltar </a>";  

        }
    echo "</div>";
    $libera = mysql_free_result($result);
    $libera = mysql_free_result($result_2);
    include_once 'grosso_fim_pagina.php';//escreve o cabeçalho da página
  }
 else 
 {
    echo "Você não está autorizado a acessar esta página";
}


?>
