<html>
<?php

function exibirProduto($produtoInfo){  
    include "dados/dados.php";
    foreach ($produtos as $produto) {
        echo $produto;
        echo "<br>";

    
    }
}

function exibirDado($dadosInfo){
    include "dados/dados.php";
    foreach ($dados as $dado) {
        echo $dado;
        echo "<br>";
    
      }
}


?>
<br>
</html>