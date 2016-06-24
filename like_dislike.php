<?php
require_once 'config/connection.php';
if (empty($_REQUEST['assoc_id'])) {
	echo json_encode(array(
		'success' => 0,
		'message' => 'Invalid Blog.'
	));exit;
}

if (empty($_SESSION['Nris_session']['id'])) {
	echo json_encode(array(
		'success' => 0,
		'message' => 'Login Required.'
	));exit;
}

$like_type = $_REQUEST['like_type'];

if (isset($_REQUEST['button_type']) && $_REQUEST['button_type'] == 'like') {
	$like_val = 1;
} elseif (isset($_REQUEST['button_type']) && $_REQUEST['button_type'] == 'dislike') {
	$like_val = 0;
}
if (!isset($like_val)) {
	echo json_encode(array(
		'success' => 0,
		'message' => 'Select either like or dislike.'
	));exit;
}

$user_id = $_SESSION['Nris_session']['id'];
$assoc_id = $_REQUEST['assoc_id'];

$table = 'likes';

$messagesArr = array(
	'blog' => array(
		0 => 'Blog disliked successfully.',
		1 => 'Blog liked successfully.'
	),
	'forum' => array(
		0 => 'Forum disliked successfully.',
		1 => 'Forum liked successfully.'
	),
	'students_talk' => array(
		0 => 'Students Talk disliked successfully.',
		1 => 'Students Talk liked successfully.'
	)
);

$message = '';
if (isset($messagesArr[$like_type][$like_val])) {
	$message = $messagesArr[$like_type][$like_val];
}

// echo 'SELECT id from '. $table .' where user_id = '.$user_id.' AND assoc_id = '.$assoc_id.' ';exit;	
$query_res = mysqli_query($con, 'SELECT id from '. $table .' where user_id = '.$user_id.' AND assoc_id = '.$assoc_id.' AND type ="'. $like_type .'"');

if (mysqli_num_rows($query_res) > 0) {
	$query_res = mysqli_query($con, 'update '.$table.' set like_val='.$like_val.' WHERE user_id = '.$user_id.' AND assoc_id ='. $assoc_id .' AND type ="'. $like_type .'"');
	$update = true;
} else {
	$update = false;
	$data = array(
		'id' => '',
		'user_id' => $user_id,
		'assoc_id' => $assoc_id,
		'like_val' => $like_val,
		'type' => $like_type
	);

	$keys = array_keys($data);
	$values = array_values($data);

	$query_res = mysqli_query($con, 'INSERT INTO `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
}

if (!empty($query_res)) {
	echo json_encode(array(
		'success' => 1,
		'like' => $like_val,
		'message' => $message
	));exit;
} else {
	echo json_encode(array(
		'success' => 0,
		'message' => 'Something went wrong.'
	));exit;
}
