--TEST--
static const cannot be repeated in the same namespace block
--FILE--
<?php

namespace {
static const VAL = "First";
static const VAL = "Second";
}
--EXPECTF--
Fatal error: Cannot declare static const VAL because the name is already in use in %s on line 5
