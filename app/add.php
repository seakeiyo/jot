<?php
header('Content-type: application/json; charset=UTF-8');

$insertString = 'UPDATE note SET title="'.$title.'", content="'.$content.'" WHERE id='.$id;
$insertString = 'INSERT INTO note VALUES(NULL,NULL,NULL)';

$db = new SQLite3('../db/jot');

$insertString = $db->escapeString($insertString);

$db->query($insertString);

$db->close();

echo json_encode(true);