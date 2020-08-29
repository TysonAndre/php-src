--TEST--
Setting and reading variables
--FILE--
(?lisp
(= $var (- 10 (- 2)))
(echo $var "\n")
(= $var (* $var 2))
(echo (. $var "\n"))
?)
--EXPECTF--
12
24
