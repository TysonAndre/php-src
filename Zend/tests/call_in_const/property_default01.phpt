--TEST--
Can call user-defined functions from defaults of static properties
--FILE--
<?php
namespace NS;
function log_call($arg) {
    echo "log_call(" . var_export($arg, true) . ")\n";
    return $arg;
}
class MyClass {
    public static $DEBUG = log_call(true);
    public static $DEBUG2 = namespace\log_call(range(1,2));
}
echo "Start\n";
var_export(MyClass::$DEBUG); echo "\n";
var_export(MyClass::$DEBUG2); echo "\n";
var_export(MyClass::$DEBUG); echo "\n";
MyClass::$DEBUG = "New value";
echo MyClass::$DEBUG . "\n";
?>
--EXPECTF--
Fatal error: Constant expression uses function NS\log_call() which is not in get_const_expr_functions() in %s on line 8
