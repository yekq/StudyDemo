<?php
require 'aes.class.php';   // AES PHP implementation
require 'aesctr.class.php'; // AES Counter Mode implementation

echo 'each change<br>';

$mstr = AesCtr::encrypt('sasa', '0123456789ABCDEFGHIJKLMNOPQRSTUV', 256);
echo "Encrypt String : $mstr<br />";

$dstr = AesCtr::decrypt($mstr, '0123456789ABCDEFGHIJKLMNOPQRSTUV', 256);
echo "Decrypt String : $dstr<br />";

echo 'each not change<br>';

$mstr = AesCtr::encrypt('sasa', '0123456789ABCDEFGHIJKLMNOPQRSTUV', 256, 1); // keep=1
echo "Encrypt String : $mstr<br />";

$dstr = AesCtr::decrypt($mstr, '0123456789ABCDEFGHIJKLMNOPQRSTUV', 256);
echo "Decrypt String : $dstr<br />";