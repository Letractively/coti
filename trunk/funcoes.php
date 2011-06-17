<?php

/*
 * Aqui estão listadas várias funcoes do php
 */

include_once 'config.php';

    
//lista os departamentos cadastrados, por ID
function lista_depart($nome_campo = "cadar_dep")
{
//    //aqui deveria buscar do banco, mas vai levar muito tempo para fazer agora
//    $departamentos = array(
//                            "escolha" => "Escolha...",
//                            "informatica" => "Informatica",
//                            "quimica" => "Quimica",
//                            "matematica" => "Matematica",
//                            "mecanica"=> "Mecanica",
//                            "hotelaria" => "Hotelaria",
//                            "alimentas" => "Alimentos",
//                            "urbanizacao" => "Urbanização");
//    $ret = "<select name = '$nome_campo'> \n";
//    
//    foreach ($departamentos as $key => $value)
//    {
//         $ret .= "<OPTION VALUE = '$key' > $value </OPTION> \n";
//    }
//    
//    $ret .= "</SELECT>\n";
//    return $ret;  
     
    $query = "SELECT departamento_id, departamento_nome FROM departamento";
    
    $result = mysql_query($query);
    
    if($result === false)
    {
        echo "Não foi possível buscar os dados" . mysql_error()."<br />";
    }
    else
    {
       // verifica numero de linhas, para listar
       $numlinha = mysql_num_rows($result);
       
       //echo $numlinha;
       
       if($numlinha > 0)
       {     
            $ret = "<select name = '$nome_campo'> \n";
            
            if(!isset($i)){
                $i = 0;
            }
            
            $i == 0; 
            //mostra os campos 
            while ( $row = mysql_fetch_assoc($result))
            {    
                
                $departamento_id[$i] = $row['departamento_id'];
                $departamento_nome[$i] = $row['departamento_nome'] ;
                
                $ret .= "<OPTION VALUE = '$departamento_id[$i]' > $departamento_nome[$i] </OPTION> \n";
                $i++;
                }
            $ret .= "</SELECT>\n";
            return $ret;  
          
       }
     
   }
}

//lista os setores 
function lista_setor($nome_campo = "cadar_setor")
{
    
    //aqui deveria buscar do banco, mas vai levar muito tempo para fazer agora
    $query = "SELECT id_setor, sigla_setor FROM setor";
    
    $result = mysql_query($query);
    
    if($result === false)
    {
        echo "Não foi possível buscar os dados" . mysql_error()."<br />";
    }
    else
    {
       // verifica numero de linhas, para listar
       $numlinha = mysql_num_rows($result);
       
       //echo $numlinha;
       
       if($numlinha > 0)
       {     
            $ret = "<select name = '$nome_campo'> \n";
           
            if(!isset($i)){
                $i = 0;
            }
            
            $i == 0; 
            //mostra os campos 
            while ( $row = mysql_fetch_assoc($result))
            {    
                
                $id_setor[$i] = $row['id_setor'];
                $sigla_setor [$i]= $row['sigla_setor'] ;
               
                $ret .= "<OPTION VALUE = '$id_setor[$i]' > $sigla_setor[$i] </OPTION> \n";
                $i++;
                }
            $ret .= "</SELECT>\n";
            return $ret;  
          
       }
     
   }
}

//lista os cargos, conforme os mesmo são inseridos no banco
function lista_cargo($nome_campo = "cadar_cargo")
{
    
    //aqui deveria buscar do banco, mas vai levar muito tempo para fazer agora
    $query = "SELECT id_cargo, nome_cargo FROM cargo";
    
    $result = mysql_query($query);
    
    if($result === false)
    {
        echo "Não foi possível buscar os dados" . mysql_error()."<br />";
    }
    else
    {
       // verifica numero de linhas, para listar
       $numlinha = mysql_num_rows($result);
       
       //echo $numlinha;
       
       if($numlinha > 0)
       {     
            $ret = "<select name = '$nome_campo'> \n";
           
            if(!isset($i)){
                $i = 0;
            }
            
            $i == 0; 
            //mostra os campos 
            while ( $row = mysql_fetch_assoc($result))
            {    
                
                $id_cargo[$i] = $row['id_cargo'];
                $nome_cargo[$i]= $row['nome_cargo'] ;
               
                $ret .= "<OPTION VALUE = '$id_cargo[$i]' > $nome_cargo[$i] </OPTION> \n";
                $i++;
                }
            $ret .= "</SELECT>\n";
            return $ret;  
          
       }
     
   }
}

//lista os usuários do setor passado
function lista_user_setor($nome_campo = "cadar_usuario")
{
    
    //aqui deveria buscar do banco, mas vai levar muito tempo para fazer agora
    $query = "SELECT user_siape,user_nome, user_email, user_telefone FROM user WHERE user_id_setor = user_id_setor";
    
    $result = mysql_query($query);
    
    if($result === false)
    {
        echo "Não foi possível buscar os dados" . mysql_error()."<br />";
    }
    else
    {
       // verifica numero de linhas, para listar
       $numlinha = mysql_num_rows($result);
       
       //echo $numlinha;
       
       if($numlinha > 0)
       {     
            $ret = "<select name = '$nome_campo'> \n";
            
            if(!isset($i)){
                $i = 0;
            }
            
            $i == 0; 
            //mostra os campos 
            while ( $row = mysql_fetch_assoc($result))
            {    
                
                $user_siape[$i] = $row['user_siape'];
                $user_nome[$i]= $row['user_nome'] ;
               
                $ret .= "<OPTION VALUE = '$user_siape[$i]' > $user_nome[$i] </OPTION> \n";
                $i++;
                }
            $ret .= "</SELECT>\n";
            return $ret;  
          
       }
     
   }
}

?>
