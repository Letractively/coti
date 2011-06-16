<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$query = "SELECT * FROM info";//sprintf("SELECT * FROM info")

// Executa consulta
$result = mysql_query($query);

if($result === false)
{
    echo "Não foi possível buscar os dados" . mysql_error()."<br />";
    
}
else
{

   $numlinha = mysql_num_rows($result);
   
   //$nomecoluna = mysql_field_name($result, $i);

   echo "<b> A consulta retornou ". $numlinha . "  registros </b> <br />";

   if($numlinha > 0)
   {
        echo "<table border = 1 >";
        echo "<tr bgcolor= 'teal'>";

        $numcoluna = mysql_num_fields($result); // diz o numero de colunas

        // lista o os nomes das colunas
        for($i = 0; $i < $numcoluna ; $i++)
        {
            echo "<td>" . mysql_field_name($result, $i). "</td>";
        }
        echo "<tr />";

        //mostra os campos 
        while ($row = mysql_fetch_assoc($result))
	{
             echo "<tr>";
                echo "<td> ".$row['id']."</td>";
		echo "<td> ".$row['nome']."</td>" ;
		echo "<td> ".$row['titulo']."</td>" ;
		echo "<td> ".$row['descricao']."</td>" ;
             echo "<tr />";
        }
    echo "</table>";
   }
}
?>
