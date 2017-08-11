<?php
$db = new PDO('sqlite:./app/tmp/database.db');
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("DROP TABLE IF EXISTS messages");
$db->exec("CREATE TABLE messages (message TEXT)");
echo('Database flushed.<br/>');
// echo('Session destroyed.<br/>');
echo('<a href="index.php">Go back</a>');
?>
