<?
$t = 'while($argv[2]--)@$o+=$argv[1]+=$argv[3]*@$i++;echo"$o\n";';
echo gzencode($t);
// echo eval(gzdecode(gzencode($t)));
echo gzdecode('+I,J/?6?P??ca,-?Lmm%??<%k3:%');

$filter     = new Zend\Filter\Compress('Bz2');
$compressed = $filter->filter('Uncompressed string');
