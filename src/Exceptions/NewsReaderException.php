<?php

namespace NewsReader\Exceptions;

use Exception;

class NewsReaderException extends Exception
{
    /**
     * Rss not found exception.
     *
     * @param  $url
     * @return static
     */
    public static function notFound($url)
    {
        return new static("Missing {$url}].");
    }
}