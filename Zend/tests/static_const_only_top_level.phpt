--TEST--
static const can only be used at the top level
--FILE--
<?php

if (true) {
    static const VAL = "First";
}
echo VAL;
--EXPECTF--
Parse error: syntax error, unexpected 'const' (T_CONST), expecting :: (T_PAAMAYIM_NEKUDOTAYIM) in %s on line 4
