<?
	function t2 ($b, $c){
		echo "Задание 2".'<br>';
		echo $b + $c.'<br>';};
	t2(3, 6);
	//-------------------

	$mass=array(
		1,
		3546,
		345,
		234,
		3435453,
		56465,
		567,
		675,
		567,
		3454,
		454,
		345,
		237745,
		4356
	);
sort($mass, SORT_NUMERIC | SORT_FLAG_CASE);
foreach ($mass as $key => $val) {
    echo "Nums[" . $key . "] = " . $val . "\n";
}

?>
