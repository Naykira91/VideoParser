<?php


abstract class AbstractVideoInfoParser
{
    /**
     * The method returns host name by url
     * @param $url
     * @return mixed|string
     */
    public function getHostingName($url)
    {
        return parse_url($url, PHP_URL_HOST);
    }


   abstract public function getVideoID($url);

   abstract public function getIframeHtml($url);

}