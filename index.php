<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Logger</title>
</head>
<body>
  <?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$file = 'ips.txt';
$current = file_get_contents($file);
$current .= $user_ip . "\n";
file_put_contents($file, $current);
header('Location: index.html');
exit;
?>
    <h1>Hello world</h1>
</html>



