<?php
foreach (glob("core/*.php") as $filename){include $filename;}
foreach (glob("content/*.php") as $filename){include $filename;}

function myPrintFunction($type){
	$type();
}

function myContent($type){
	$type();
}

?>