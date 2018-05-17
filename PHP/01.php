<!DOCTYPE html>
<html>
<body>


	<?php
	/* //变量
	$x = 5;
	$y = 5;
	$z = $x + $y;
	echo $z;
	$text = 'hello php';
	echo $text;
	*/


	/* //global 关键字
	$x = 5;
		$y = 6;

	function test(){
				global $x,$y;

		echo '<p>测试变量内部<p>';
		echo "x 内部为 $x";
		echo '<br>';
		echo "y 内部为 $y";


	}
	test();

	echo '<p>测试变量外部<p>';
	echo "x 外部为 $x";
	echo '<br>';
	echo "y 外部为 $y";

	*/

	/* //static 关键字
	function myTest(){

		static $x = 0;
		$x ++;
		echo "<p>$x<p>";
	}

	myTest();
	myTest();
	*/

	/*
	function myTest($x){
		echo "$x";
	}
	myTest(5);
	*/
	/*
$name="jack";
$a= <<<EOF
	"abc":$name
	"123"
EOF;
echo $a;


echo <<<EOF
<h1>h1</h1>
<p>p<p>
EOF;
*/








	?>

</body>
</html>
