<?php


function build_auth_key(){
    $chars  = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $chars .= '`~!@#$%^&*()_+-=[]{};:"|,.<>/?';
    $chars  = str_shuffle($chars);
    return substr($chars, 0, 40);
}

echo  md5(sha1('admin') . '525998bd2d9bfa1d51eb4334551db88e');
echo '<br />';
echo time();
echo '<br />';
echo var_dump($_SERVER);
