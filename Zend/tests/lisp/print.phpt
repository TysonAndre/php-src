--TEST--
Print basic expressions test
--FILE--
(?lisp
(print "test from lisp\n")
(print (. (+ 1 2) "\n"))
(print (* 3 2))
(print "\n")
?)
--EXPECTF--
test from lisp
3
6
