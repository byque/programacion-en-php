<?php
$var = "";
echo (empty($var))?"vacío":"tiene valor";

unset($var);

echo (isset($var))?"</br>está lista":"</br>NO está";
?>
