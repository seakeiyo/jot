<?php
header('Content-type: application/json; charset=UTF-8');

$titleFieldID = $_POST["titleFieldID"];
$title = $_POST["title"];

$id_element = explode('-', $titleFieldID);

$id = $id_element[1];

$updateString = 'UPDATE note SET title="'.$title.'" WHERE id='.$id;

$db = new SQLite3('../db/jot');

$db->query($updateString);

$db->close();

echo json_encode(true);
?>