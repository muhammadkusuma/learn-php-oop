<?php

$matches=[];
$result=preg_match_all("/wira|ade|suma/i", "M. Wira Ade Kusuma", $matches);

var_dump($result);
var_dump($matches);

$result=preg_replace("/anjing|bangsat/i","***","dasar lu anjing dan bangsat!");
var_dump($result);

$result=preg_split("/[\s,-]/","M. Wira Ade Kusuma,Programmer,Zaman-Now");
var_dump($result);