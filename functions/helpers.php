<?php

//config
define('BASE_URL', 'http://localhost/php-project/');

function redirect($url)
{
    header('Location: '. trim(BASE_URL, '/ ') . '/' . trim($url, '/ '));
    exit;
}
// redirect('panel/category');

function asset($file)
{
    return trim(BASE_URL, '/ ') . '/' . trim($file, '/ ');
}
// <img src="asset(assets/image/hassan.png)">
// echo asset('assets/css/style.css');
#link

function url($url)
{
    return trim(BASE_URL, '/ ') . '/' . trim($url, '/ ');
}
// echo url('panel/category');
# mack adress

function dd($var)
#dome die
{
    echo '<pre>';
    var_dump($var);
    exit;
}
# $users = ['hamid', 'mari'];
# dd($users);


