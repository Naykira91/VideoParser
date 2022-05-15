<?php
require_once("YoutubeVideoInfoParser.php");
require_once("VimeoVideoInfoParser.php");
require_once("VideoInfoParserFactory.php");

//Тестовая страница для проверки классов
$url = 'https://www.youtube.com/watch?v=xcJtL7QggTI';

try{
    $parser = VideoInfoParserFactory::getParser($url);

    echo $parser->getIframeHtml($url) . '<br>';
    echo $parser->getHostingName($url). '<br>';
    echo $parser->getVideoID($url). '<br>';
} catch (Exception $e){
    echo '<p>'. $e->getMessage(). '</p>';
}
