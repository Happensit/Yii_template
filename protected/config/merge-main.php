<?php
$mergePath = dirname(__FILE__).DIRECTORY_SEPARATOR.'merge-main';
$mergeItems = CFileHelper::findFiles($mergePath);

$mergeArray = array();
foreach ($mergeItems as $value) {
	$itemArray = require_once($value);
	$mergeArray = CMap::mergeArray($itemArray, $mergeArray);
}

/* load database config */
$dbArray = require_once('database.php');
$mergeArray = CMap::mergeArray($dbArray, $mergeArray);

return $mergeArray;