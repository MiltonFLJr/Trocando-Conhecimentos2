<?php

 include 'conexao.php';
    
$stmt = $con->query("SELECT * FROM livro");

while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    $capa = $linha['capa'];
    
    echo "<center>";
     echo "<table id='customers'>";
          echo "<tr>";
         echo "<th>";
          echo $linha['nomeLivro'];
          echo "</th>" ;  
          
          echo "<th>";
          echo "Autor";
          echo "</th>" ; 
          
          echo "<th>";
          echo "Gênero";
          echo "</th>" ; 
          
          echo  "</tr>";
          
          echo  "<tr>";
          
          echo  "<td>";
        echo "<img width='120' height='150' src='/Trocando-Conhecimentos2/Trocando-Conhecimentos2/PJTCCOFICIAL/capaslivros/$capa'>";
       echo "</td>";
       
        echo  "<td>";
        echo $linha['autorLivro'];
       echo "</td>";
       
           echo  "<td>";
        echo $linha['generoLivro'];
       echo "</td>";
       
       echo "</tr>";
       
      echo "</table>";
    echo "</center>";
}

?>