<?php
$a = $_POST["avaliaçao"];                                                    
$t = $_POST["trabalho"];
$e = $_POST["exame"];

$media = (($t * 2) + ($a * 3) + ($e * 5)) / 10;

echo "$media";


?>