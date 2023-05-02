<?php

$obj = new stdClass();
$obj->menu = new stdClass();
$obj->menu->id = "file";
$obj->menu->value = "File";
$obj->menu->popup = new stdClass();
$obj->menu->popup->menuitem = array(
    array("value" => "New", "onclick" => "CreateNewDoc()"),
    array("value" => "Open", "onclick" => "OpenDoc()"),
    array("value" => "Close", "onclick" => "CloseDoc()")
);

$json = json_encode($obj);
echo $json;

?>
