<?php

$texto  = "gustavo";

for($i = 0; $i < strlen($texto); $i++)
echo " <br> " . $texto[$i] . " - " . ord($texto[$i]) . "<br>" ;

?>