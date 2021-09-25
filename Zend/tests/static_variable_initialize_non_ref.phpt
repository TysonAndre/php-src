--TEST--
Static variable initialize by non-reference (:=)
--FILE--
<?php
function test_append($value) {
    static $singleton := new ArrayObject();
    $singleton->append($value);
    $values = $singleton->getArrayCopy();

    $singleton = 'object overwritten by value (not by ref)';
    return [$values, $singleton];
}
for ($i = 0; $i < 3; $i++) {
    echo json_encode(test_append("x$i")), "\n";
}

?>
--EXPECT--
[["x0"],"object overwritten by value (not by ref)"]
[["x0","x1"],"object overwritten by value (not by ref)"]
[["x0","x1","x2"],"object overwritten by value (not by ref)"]
