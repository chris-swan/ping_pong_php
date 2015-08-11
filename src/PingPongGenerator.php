<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
        	$result = array();
        	$counter = 1;
        	while ($counter <= $input) {
        		$result[] = $counter;
        		++$counter;
        	}
        	return $result;
        }
    }

 ?>
