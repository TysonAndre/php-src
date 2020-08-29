--TEST--
Setting and reading constants
--FILE--
(?lisp
(const MY_CONSTANT "My constant")
(echo MY_CONSTANT "\n")
(echo \MY_CONSTANT "\n")
(echo namespace\MY_CONSTANT "\n")
?)
--EXPECTF--
My constant
My constant
My constant
