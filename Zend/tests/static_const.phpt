--TEST--
static const supports dynamic expressions
--FILE--
<?php

namespace {
function trace($val) {
    echo "Declaring\n";
    var_dump($val);
    return $val;
}

$eof = "\n";
static const VAL1 = "World";  // sprintf("Hello, %s", "World");
// echo "VAL1 is " . VAL1 . "\n";
static const VAL2 = sprintf("Hello, %s%s", VAL1, $eof);

function main() {
    echo VAL2;
}
}

namespace {

$local = "Other string\n";
static const VAL2 = $local;

main();
echo VAL2;
main();
}

--EXPECT--
Hello, World
Other string
Hello, World
