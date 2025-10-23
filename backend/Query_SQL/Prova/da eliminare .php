<?php

$prova= json_decode(file_get_contents(  'Flag.json'),true);

$prova2=json_decode(file_get_contents('compress.bzip2://'.'berlin.json.bz2'),true);
var_dump($prova2); 
?>
