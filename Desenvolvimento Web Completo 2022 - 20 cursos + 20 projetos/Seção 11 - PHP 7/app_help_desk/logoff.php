<?php

session_start();
/*
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//remover indices do array de sessã remover 1 a 1.
unset($_SESSION['x']);


echo '<pre>';
print_r($_SESSION);
echo '</pre>';


//destruir a variável de sessão
session_destroy();
//forçar um redirecionamento (Força um nova requisição HTTP)

';
print_r($_SESSION);
echo '</pre>';
*/

session_destroy();
header('Location: index.php')

?>