<?php

require_once ('AbstractVideoInfoParser.php');


class VimeoVideoInfoParser extends AbstractVideoInfoParser
{


    /**
     * The method returns  id of the video by url
     * @param $url
     * @return string
     *
     */
    public function getVideoID($url)
    {
        if(preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/", $url, $output_array)) {
           $vimeoID = $output_array[5];
        }
        return  $vimeoID ;
    }


    /**
     * method returns html code for embedding url to iframe
     * @param $url
     * @return string
     */
    public function getIframeHtml($url)
    {
        $iframeUrl = "<iframe src='https://player.vimeo.com/video/".$this->getVideoID($url)."?h=8435b03c7b&color=ffffff&title=0&byline=0&portrait=0&badge=0' width='640' height='360' frameborder='0' allow='autoplay; fullscreen; picture-in-picture' allowfullscreen></iframe>";

      return $iframeUrl;
    }
}