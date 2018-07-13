<?php
//Simple function to construct CURLFile from the file path:

function makeCurlFile($file){
$mime = mime_content_type($file);
$info = pathinfo($file);
$name = $info['basename'];
$output = new CURLFile($file, $mime, $name);
return $output;
}

//Then construct an array of all the form fields you want to post. For each file upload just add the CURLFiles.

$ch = curl_init("https://api.example.com");
$mp3 =makeCurlFile($audio);
$photo = makeCurlFile($picture);
$data = array('mp3' => $mp3, 'picture' => $photo, 'name' => 'My latest single', 'description' => 'Check out my newest song');
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
if (curl_errno($ch)) {
   $result = curl_error($ch);
}
curl_close ($ch);
?>