--TEST--
secp256k1_ec_pubkey_parse errors if context is wrong resource type
--SKIPIF--
<?php
if (!extension_loaded("secp256k1")) print "skip extension not loaded";
?>
--FILE--
<?php

set_error_handler(function($code, $str) { echo $str . PHP_EOL; });

$result = secp256k1_ec_pubkey_parse();
echo $result . PHP_EOL;
?>
--EXPECT--
secp256k1_ec_pubkey_parse() expects exactly 3 parameters, 0 given
0
