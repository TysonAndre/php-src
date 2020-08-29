--TEST--
While statements
--FILE--
(?lisp

(= $i 1)
(while (<= $i 3) (do (echo $i "\n") (++ $i)))
(while (<= $i 0) (do (echo "unreachable") (= $i (+ $i 1))))
(echo "After loop $i\n")
(echo (++$i) "\n")
(echo (--$i) "\n")
?)
--EXPECTF--
1
2
3
After loop 4
5
4
