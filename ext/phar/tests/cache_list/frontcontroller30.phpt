--TEST--
Phar front controller with weird SCRIPT_NAME [cache_list]
--INI--
phar.cache_list={PWD}/frontcontroller30.php
--EXTENSIONS--
phar
--ENV--
SCRIPT_NAME=/huh?
REQUEST_URI=/huh?
--FILE_EXTERNAL--
files/frontcontroller8.phar
--EXPECTF--
oops did not run
%a
