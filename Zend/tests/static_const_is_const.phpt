--TEST--
static const cannot be modified
--FILE--
<?php

namespace Example;
$var = "Example";
static const VAL1 = [$var];
try {
    preg_match('/\w+/', 'Test message', VAL1);
} catch (\Error $e) {
    echo "Caught: " . $e->getMessage() . "\n";
}
var_dump(VAL1);
--EXPECT--
Caught: Cannot pass parameter 3 by reference
array(1) {
  [0]=>
  string(7) "Example"
}
