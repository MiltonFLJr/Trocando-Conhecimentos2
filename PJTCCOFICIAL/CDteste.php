<?php

 include 'conexao.php';
    include 'CDiniciarSessao.php';
    
    $stmt= $con->prepare("SELECT cdLivro FROM usuario_livro WHERE cdUsuario=?");
        
    $stmt->bindParam(1,$_SESSION['cdUs']);
        
    $stmt->execute();
        
        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            $cdLivros = ($linha['cdLivro']);
    
$stmt2 = $con->prepare("SELECT * FROM historico_de_troca WHERE cdLivro=? OR dadosUsuarioTroca=? ");

$stmt2->bindParam(1,$cdLivros);
$stmt2->bindParam(2,$_SESSION['nome']);

$stmt2->execute();

while($linha2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
    
    echo "<center>";
     echo "<table id='customers'>";
     
          echo "<th>";
          echo "Código livro";
          echo "</th>" ; 
          
          echo "<th>";
          echo "Nome do livro";
          echo "</th>" ; 
          
            echo "<th>";
          echo "Nome do livro oferecido";
          echo "</th>" ; 
          
            echo "<th>";
          echo "Resultado da troca";
          echo "</th>" ; 
          
          echo "<th>";
          echo "Usuário que ofereceu o livro";
          echo "</th>" ; 
          
            echo "<th>";
          echo "Data da troca";
          echo "</th>" ; 
          
          echo  "</tr>";
          
          echo  "<tr>";
          
          echo  "<td>";
        echo ($linha2['cdLivro']);
       echo "</td>";
       
        echo  "<td>";
        echo $linha2['nomeLivro'];
       echo "</td>";
       
           echo  "<td>";
        echo $linha2['nomeLivroOferecido'];
       echo "</td>";

       echo  "<td>";
        echo $linha2['resultadoTroca'];
       echo "</td>";
       
        echo  "<td>";
        echo $linha2['dadosUsuarioTroca'];
       echo "</td>";
       
        echo  "<td>";
        echo $linha2['dtTrocaLivro'];
       echo "</td>";
       
       echo "</tr>";
       
      echo "</table>";
    echo "</center>";
}
   
}