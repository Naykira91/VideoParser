<?php

interface VideoInfoParser
{
    public function getHostingName($url);

    public function getVideoID($url);

    public function getIframeHtml($url);
}