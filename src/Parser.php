<?php
require_once __DIR__ . 'ParserInterface.php';

class Parser implements ParserInterface
{

    /**
     * @param string $url
     * @param string $tag
     * @return array
     * @see http://splx.com.ua
     *
     * @author SplX
     */
    public function process(string $url, string $tag): array
    {
        return [
            'just',
            'do',
            'it'
        ];
    }
}