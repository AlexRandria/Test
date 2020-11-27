<?php
$id = isset($_GET["id"]) && !empty($_GET["id"]) ? "valeur ok" : "valeur not ok"; 
echo $id;

