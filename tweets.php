<?php

require_once 'twitter-php/twitter.class.php';

//Twitter OAuth Settings, enter your settings here:
$CONSUMER_KEY = 'Fvg5FdeeaNS1UsdnNHw4UnbjM';
$CONSUMER_SECRET = 'o5Ub134ZQU37rBSbWP9l6NF2k35YZ1X8WAhshs2HpEyteXVyT1';
$ACCESS_TOKEN = '423413444-wnrgecaaMnOepEQsUtpj78V8V4AOmCCCAeIYHdec';
$ACCESS_TOKEN_SECRET = '4OeuPF8dIgqA6CAyj62YDVmoUA4Q4GIVWOqx4qCMUiZgr';

$twitter = new Twitter($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);

// retrieve data
$q = $_POST['q'];
$count = $_POST['count'];
$api = $_POST['api'];

// api data
$params = array(
	'screen_name' => $q,
	'q' => $q,
	'count' => 20,
  'includes_rts' => true
);

$results = $twitter->request($api, 'GET', $params);

// output as JSON
echo json_encode($results);
?>