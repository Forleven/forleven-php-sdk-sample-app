<?php

include 'autenticacao.php';

$url_do_botao = $auth->getAuthotizationUrl();

?>

<a href="<?=$url_do_botao?>" target="_blank" id="fl_btn">Área do Aluno</a>