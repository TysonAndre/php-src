--TEST--
If statements
--FILE--
(?lisp

(if 1 (= $x "yes") (= $x "no"))
(echo $x "\n")
(if 0 (= $x "yes") (= $x "no"))
(echo $x "\n")
(if 1 (= $x "!"))
(echo $x "\n")
(if 0 (= $x "?"))
(echo $x "\n")
?)
--EXPECTF--
yes
no
!
!
