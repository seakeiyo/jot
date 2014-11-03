<?php
header('Content-type: application/json; charset=UTF-8');

$id = $_POST['titleFieldID'];
$title = $_POST['title'];
$content = $_POST['content'];

$title = sanitize($title);
$content = sanitize($content);

$updateString = 'UPDATE note SET title="'.$title.'", content="'.$content.'" WHERE id='.$id;

$db = new SQLite3('../db/jot');

$updateString = $db->escapeString($updateString);

$db->query($updateString);

$db->close();	

echo json_encode(true);

function sanitize($string){
	return htmlspecialchars($string, ENT_QUOTES);
}