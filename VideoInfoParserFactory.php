<?php

class VideoInfoParserFactory
{

    /**
     * The method returns an object depends on host
     * @param $url
     * @throws Exception
     */
    public static function getParser($url)
     {
         $host = parse_url($url, PHP_URL_HOST);

         if(strpos($host, 'youtube') !== false){
             return new YoutubeVideoInfoParser();
         }
         if (strpos($host, 'vimeo') !== false) {
             return new VimeoVideoInfoParser();
         }
        // если реализуем на php 8, то вместо strpos  можно использовать  str_contains

         throw new Exception('Required parser not found for host '.$host);

     }

}