<?php
header('Content-type: application/json; charset=UTF-8');

$id = $_POST['titleFieldID'];
$title = $_POST['title'];
$content = $_POST['content'];

$title = sanitize($title);
$content = sanitize($content);

$status = false;

$updateString = 'UPDATE note SET title="'.$title.'", content="'.$content.'" WHERE id='.$id;

$db = new SQLite3('../db/jot');

$db->query($updateString);

$db->close();
	
$status = true;

echo json_encode($status);

function sanitize($string){
	return htmlspecialchars(strip_tags($string), ENT_QUOTES);
}