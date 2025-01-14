<?php

# str_starts_with

$id = 'inv_adddddsadd';
$str_start = str_starts_with($id, 'inv_');
echo 'str_start_with inv is ' . ($str_start ? 'true' : 'false') . '<br>';

# str_ends_with

$id = 'invadddddsa_csk';
$str_end = str_ends_with($id, '_csk');
echo 'str_end_with csk is ' . ($str_end ? 'true' : 'false') . '<br>';

# str_contain
$url = 'https://example.com?name=sajo';

// var_dump(parse_url($url)['query']);
$result  = str_contains($url, '?');
var_dump($result);