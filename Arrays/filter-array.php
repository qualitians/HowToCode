<?php 
function odd($value){
		return (($value%2)==1);
}
function even($value){
		return (($value%2)!=1);
}

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$filterArray_Odd = array_filter($array, "odd");
$filterArray_Even = array_filter($array, "even");

// Output the filtered array of Odd Numbers
echo "<h3>Odd Numbers:</h3>";
print_r($filterArray_Odd);

// Output the filtered array of Even Numbers
echo "<h3>Even Numbers:</h3>";
print_r($filterArray_Even);

?>
