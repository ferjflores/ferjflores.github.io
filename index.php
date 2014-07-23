<?php
	$codigos = array('0416' => array(1,2,3), '0426' => array(4,5,6), '0414' => array(7,8), '0424' => array(9,10), '0412' => array(11,12));
	$codigo = rand(1, 12);
	$codigo = recursive_array_search($codigo, $codigos);
	$numero = rand(100000, 9999999);


	$num_length = strlen((string)$numero);
	if($num_length < 7) {
	    $numero = "0" . (string)$numero;
	}

	print $codigo . $numero;





function recursive_array_search($needle,$haystack) {
    foreach($haystack as $key=>$value) {
        $current_key=$key;
        if($needle===$value OR (is_array($value) && recursive_array_search($needle,$value) !== false)) {
            return $current_key;
        }
    }
    return false;
}

?>