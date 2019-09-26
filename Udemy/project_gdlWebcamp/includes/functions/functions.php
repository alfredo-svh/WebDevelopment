<?php

	function products_json(&$tickets, &$shirts = 0, &$stickers = 0){
		$days = array(0 => 'one_day', 1 => 'full_pass', 2=> 'twoDay_pass');
		$total_tickets = array_combine($days, $tickets);
		$json = array();

		foreach($total_tickets as $key => $tickets){
			if((int) $tickets > 0){
				$json[$key] = (int) $tickets;
			}
		}

		$shirts = (int) $shirts;
		if($shirts > 0){
			$json['shirts'] = $shirts;
		}

		$stickers = (int) $stickers;
		if($stickers > 0){
			$json['stickers'] = $stickers;
		}

		return json_encode($json);
	}

	function events_json(&$events){
		$events_json = array();
		foreach($events as $event){
			$events_json['events'][] = $event;
		}
		return json_encode($events_json);
	}

?>