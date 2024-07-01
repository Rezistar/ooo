<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$file = 'ips.txt';
$current = file_get_contents($file);
$current .= $user_ip . "\n";
file_put_contents($file, $current);
header('Location: index.html');
exit;
?>
