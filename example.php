<?
$headers = [
    'Authorization: Bearer sk-s68980b7df06c90b558092fawebff9as'
];
$data = [
    'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
    'gender' => 'male',
    'lang' => 'english'
];
$url = 'https://api.talkbot.ir/v1/media/text-to-speech/REQ';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
echo $response = curl_exec($ch);
if(curl_errno($ch)){
    echo 'error CURL: ' . curl_error($ch);
}
curl_close($ch);
	
