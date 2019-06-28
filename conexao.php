<?php
/* conexao local*/
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'usbw');
define('DB', 'cada');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não conectou ao banco de dados');







?>