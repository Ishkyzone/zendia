<?php
$ligaBD=mysqli_connect('localhost','root','');
if(!$ligaBD)
{ echo "Erro de ligação"; exit;}
$escolhaBD=mysqli_select_db($ligaBD, 'Zendia');
if (!$escolhaBD)
{
die('Erro: '. mysqli_error($ligaBD));
}
?>