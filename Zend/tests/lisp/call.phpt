--TEST--
Function calls
--FILE--
(?lisp

(printf "Hello, %s\n" "World")
(= $printer (. 'pri' 'ntf'))
($printer "Dynamic %s\n" $printer)

?)
--EXPECTF--
Hello, World
Dynamic printf
