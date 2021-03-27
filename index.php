<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <header>
        <p>AutoStatus</p>
    </header>
</body>
</html>

<?php
$token ='cb0b2d697be462a6d650182d71bbf3812aa1de2ec0a36ede883b5bee607e216171a197238d8ba59e25105';

$base = file('base.txt');

$rand = mt_rand(0,3);

$result = $base[$rand];

$params = [
    'text' => $result,
    'access_token' => $token,
    'v' => '5.130'
];

$params = http_build_query($params);

$query = file_get_contents('https://api.vk.com/method/status.set?'.$params);

$result = json_decode($query,true);

print_r($result);
?>
