<?php

require_once ('VideoInfoParser.php');
require_once ('AbstractVideoInfoParser.php');

class YoutubeVideoInfoParser extends AbstractVideoInfoParser implements VideoInfoParser
{

    /**
     * The method returns  id of the video by url
     * @param $url
     * @return string
     *
     */
    public function getVideoID($url)
    {
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        return  $youtube_id ;
    }


    /**
     * The method returns html code for embedding url to iframe
     * @param $url
     * @return string
     */
    public function getIframeHtml($url)
    {
        $iframeUrl = "<iframe width='560' height='315' src='https://www.youtube.com/embed/". $this->getVideoID($url). "' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";

      return $iframeUrl;
    }
}