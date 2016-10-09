	<?php
		$data=get_data("https://graph.facebook.com/731810080230493/promotable_posts?access_token=CAACEdEose0cBAGoyIbJyY0t0LCkEqKD9giJZAupzZA5WiUxyxtvsHJbTWR2GV4CJkt8A483ZA9Xfz9lbon7rnSZBVlOKP0eZCHBGW1KyXZCG3imuRsRxoupmBOZA4RXId5MRKZCX4Sz4FpWbiaftZCkg1h0ycPFV9a4S5Jl2Bh1wxyME8wpWT3IawNgE7Uk1UL17dC63ZA0xt3jFZCmd9oM0uFyeH3QwfUxKKoZD");
		$result=json_decode($data);
		echo $data;
		function get_data($url) {
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
}
		
	?>