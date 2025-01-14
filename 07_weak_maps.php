<?php

$obj = new stdClass();

$store = new WeakMap();

$store[$obj] = 'foobar';

echo '<pre>';
var_dump($store);
echo '</pre>';

unset($obj);


echo '<pre>';
var_dump($store);
echo '</pre>';


