<?php 

// nim saya 61
$theta = deg2rad(70);
$arr1 = [
	[round(cos($theta),2) , round(-sin($theta),2) ],
	[round(sin($theta),2), round(cos($theta),2)]
];

$arr2 = [
	[10,20,30,20,20,25,15,25,15],
	[10,0,10,20,10,15,15,5,5]
];
var_dump($arr1);

for ($i=0; $i < count($arr2); $i++) {
	if($i == 0){
			echo "Matriks atas <br>";
		}else{
			echo "Matriks bawah <br>";
		}
	for($j=0; $j < count($arr2[$i]); $j++){
		echo ($arr1[$i][0] * $arr2[0][$j] ) . ' + '
		. ($arr1[$i][1] * $arr2[1][$j] ) . ' = '
		. ($arr1[$i][0] * $arr2[0][$j]) + ($arr1[$i][1] * $arr2[1][$j]) .'<br>';
	}
}

 ?>