--TEST--
serialize() serializing array values as undefined
--FILE--
<?php
class NoSleep {
    public int $x;
}
$x = new NoSleep();
// TODO: Only do this for serialize($x, ['explicit_undefined' => true])
echo ($s = serialize($x)), "\n";
$sCopy = unserialize($s);
var_export($sCopy);
echo "\n";
try {
    $sCopy->x = 'invalid';
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
?>
--EXPECT--
O:7:"NoSleep":1:{s:1:"x";U;}
NoSleep::__set_state(array(
))
Cannot assign string to property NoSleep::$x of type int
