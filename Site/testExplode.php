<?php
	$res = array();
				//$res = explode(" ", $code_boucle);
				$res = explode(" ", "FR 72 2525 1212");
				$pays = $res[0];
				$departement = $res[1];
				$exploitation = $res[2];
				$num_travail = $res[3];
				
				var_dump($pays);
				var_dump($departement);
				var_dump($exploitation);
				var_dump($num_travail);
?>