<?php 
require_once __DIR__ . '/lib/KdtApiClient.php';



$appId = '049a6ca527be198c76';
$appSecret = 'b66a32a76b01b09e11c3fa1de1fd691f';
$client = new KdtApiClient($appId, $appSecret);

$method = 'kdt.logistics.trace.search';
$TransitStepInfo = [];
$json = json_encode($TransitStepInfo);
$params = [
	'tid' => 'E20141109588264315',
	'status' =>6,
	'trace_list'=>$json,
];

$files = [
];


echo '<pre>';
var_dump( 
	$client->post($method, $params, $files)
);
echo '</pre>';
