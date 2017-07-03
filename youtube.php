<?php

$API_KEY = 'AIzaSyBM45T9CuEMt7Uql6bAsitM-HlPaaW-At8';

$search_term = urlencode('pit bulls'); //remove spaces in search term

$viewcount_url = 'https://www.googleapis.com/youtube/v3/videos?part=contentDetails,statistics&id=TruIq5IxuiU,-VoFbH8jTzE,RPNDXrAvAMg,gmQmYc9-zcg&key=' . $API_KEY;

$search_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $search_term . '&key=' . $API_KEY;

$json = file_get_contents($search_url);

$obj = json_decode($json);

print_r($obj);
