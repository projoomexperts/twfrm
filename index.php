<?php
header("Access-Control-Allow-Origin: *");
$url = htmlspecialchars($_GET["url"]) ;
$oembed_url = 'https://publish.twitter.com/oembed?url=' . $url;
$json = file_get_contents($oembed_url);
$obj = json_decode($json);
$html = $obj->html;
$html = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $html);
echo $html;
?>