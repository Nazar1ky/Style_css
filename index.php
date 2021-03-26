<?php
$login = 'nazar.iurchak@gmail.com'; //Логин
$pass = 'www300913'; //Пароль
$audio = '528174818_456239037'; //id аудио
$auth = curl( 'https://oauth.vk.com/token?grant_type=password&cl..'. $login     

.'&password='. $pass ); //Авторизация
$json = json_decode( $auth, true );
$access_token = $json['access_token'];
echo "Статус установлен!";
$statusSet = curl( 'https://api.vk.com/method/status.set?audio='. urlencode( $audio ) .'&access_token='. $access_token );
function curl( $url ) {
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
$response = curl_exec( $ch );
curl_close( $ch );
return $response;
}
