--TEST--
Test mb_detect_encoding() function : empty encoding list
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
?>
--FILE--
<?php

$string = 'Hello';

try {
    var_dump( mb_detect_encoding($string, ''));
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
try {
    var_dump( mb_detect_encoding($string, []));
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}

?>
--EXPECT--
mb_detect_encoding(): Argument #2 ($encoding_list) must specify at least one encoding
mb_detect_encoding(): Argument #2 ($encoding_list) must specify at least one encoding
