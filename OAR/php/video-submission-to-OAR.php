<?php

$file_path_str = 'video-submission-to-OAR.xml';

$url_path_str = 'http://oar.sci-gaia.eu/batchuploader/robotupload/insert';
$headers = [
    'Content-Type: application/marcxml+xml',
    'User-Agent: invenio_webupload'
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$url_path_str.'');
curl_setopt($ch, CURLOPT_PUT, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$fh_res = fopen($file_path_str, 'r');
curl_setopt($ch, CURLOPT_INFILE, $fh_res);
curl_setopt($ch, CURLOPT_INFILESIZE, filesize($file_path_str));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$curl_response_res = curl_exec ($ch);
fclose($fh_res);
echo $curl_response_res;
?>
