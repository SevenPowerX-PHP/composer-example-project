<?php


interface ParserInterface
{
    /**
     * @author SplX
     * @see http://splx.com.ua
     *
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag):array ;
}