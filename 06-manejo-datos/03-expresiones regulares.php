<?php

$password = '123456';
// echo preg_match('/^[0-9]{6,9}$/',$password);
var_dump((bool) preg_match('/^[0-9]{6,9}$/', $password));