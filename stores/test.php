<?php
$str = "2;electronics;5;clothing;6;bikini";
$table = explode(";",$str);
$count = substr_count($str, ';');
echo '<table>';
$rr = 0;
for ($x = 0; $x <= $count/2; $x++) {
    echo '
		<tr>
			<td>'.$table[$rr].'</td>
		';
		$rr = $rr+1;
	echo '
			<td>'.$table[$rr].'</td>
		</tr>';
	$rr = $rr+1;
}
echo '</table>';

?>
<br>
<br>
<?php
$str = 'Rs. 12';
$str = '5%';
$test = preg_match_all('!\d+!', $str, $matches);
//print_r($matches);
echo $matches[0][0];

$tt = explode("!\d+!",$str);
print_r($tt);
?>