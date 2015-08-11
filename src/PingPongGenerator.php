<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
        	$result = array();
        	$counter = 1;
        	while ($counter <= $input) {
        		if ($counter == 3) {
        			$result[] = "Ping";
        		}
        		else {
        			$result[] = $counter;
        		}
        		++$counter;
        	}
        	return $result;
        }
    }

 ?>
