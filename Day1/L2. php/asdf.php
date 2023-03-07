<html>

<body>

<h1><?php 

include "file2.php";

echo $a;


$a = 5;
$b = 3;
if ($a < $b) {
	$c = $a;
	$a = $b;
	$b = $c;
}
echo "[$a, $b]  $c";

?></h1>

</body>

<html>