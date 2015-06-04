<?
$t = '"echo{$a}1]*{$a}2]+(((--{$a}2]*{$a}3])*({$a}2]+1)*({$a}2]+2))/6).\"\n\"";';
$a='$argv[';
echo gzuncompress(gzcompress($t));
// echo eval(gzuncompress(gzcompress($t)));
