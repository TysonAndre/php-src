--TEST--
readline() function - without input
--CREDITS--
Jonathan Stevens <info at jonathanstevens dot be>
User Group: PHP-WVL & PHPGent #PHPTestFest
--EXTENSIONS--
readline
--SKIPIF--
<?php
if (!function_exists('readline')) die("skip readline() not available");
?>
--FILE--
<?php
var_dump(readline());
var_dump(readline('Prompt:'));
?>
--EXPECTF--
bool(false)
%Abool(false)
