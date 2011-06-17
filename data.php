<?php

include_once "config.php";

//fFnção que retorna data com o dia da semana e o mês por extenso, em português
function data_extenso(){
    
// Traduz os dias da semana
    $sem = date("l");
    
    switch($sem){
        case "Sunday" : $sem = "Domingo"; 
        break;
        case "Monday" : $sem = "Segunda-Feira"; 
        break;
        case "Tuesday" : $sem = "Terça-Feira"; 
        break;
        case "Wednesday" : $sem = "Quarta-Feira"; 
        break;
        case "Thursday" : $sem = "Quinta-Feira"; 
        break;
        case "Friday" : $sem = "Sexta-Feira"; 
        break;
        case "Saturday" : $sem = "Sábado"; 
        break;
    }

    //Traduz os meses
    $mes = date("F");
    
    switch($mes){
        case "January" : $mes = "Janeiro"; 
        break;
        case "February" : $mes = "Fevereiro"; 
        break;
        case "March" : $mes = "Março"; 
        break;
        case "April" : $mes = "Abril"; 
        break;
        case "May" : $mes = "Maio"; 
        break;
        case "June" : $mes = "Junho"; 
        break;
        case "July" : $mes = "Julho"; 
        break;
        case "August" : $mes = "Agosto"; 
        break;
        case "September" : $mes = "Setembro"; 
        break;
        case "October" : $mes = "Outubro"; 
        break;
        case "November" : $mes = "Novembro"; 
        break;
        case "December" : $mes = "Dezembro"; 
        break;
    }
    
   
    //$sem = date("l");
    //todo o conteudo para traduzir
    //$mes = date("F");
    //todo o conteudo para traduzir
    $dia = date("d");
    $ano = date("Y");
    //resultado
    echo "$dia de $mes de $ano";
   // echo "$sem, $dia de $mes de $ano"; // exibe o dia da semana e a data com o mês por extenso
     
}

//Função que retorna data e hora com horário de Brasília/São Paulo
function seta_data_hora() {
        date_default_timezone_set("America/Sao_Paulo");
        echo date("d/m/Y H:i");
 }
 
 //Função que retorna apenas a data no formato numérico
  function seta_data() {
        date_default_timezone_set("America/Sao_Paulo");
        echo date("d/m/Y");
 }
 
?>
