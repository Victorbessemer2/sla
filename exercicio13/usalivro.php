<?php
    include_once "Livro.class.php";
    $livro = new Livro('Lusiadas', 'Camões', true);
    //  echo "<pre>";
    //  print_r($livro);
    //  echo "</pre>";

    echo $livro->ExibirStatus();
    echo "<hr>";

?>