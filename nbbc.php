<?php
require 'nbbc/nbbc.php';
$bb=new bbcode();
$output ='[u][b][i]BOLD[/i][/b][/u]';
$result= $bb->Parse($output);
echo $result;
?>
