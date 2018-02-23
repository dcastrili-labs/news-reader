<?php

namespace NewsReader\Service;

use NewsReader\Contracts\NewsReaderInterface;

class NewsReader implements NewsReaderInterface
{
    /**
     * @var
     */
    private $Url;

    /**
     * @var
     */
    private $query;

    /**
     * @param $queryString
     */
    public function with($queryString)
    {
        $this->query = $queryString;

        return $this;
    }

    /**
     * @param $url
     * @return mixed
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param $array
     */
    public function mix($array)
    {
        foreach ($array as $newsName => $elements) {

            $this->url = $elements['url'];

            //Filter request or simply get all
            if (isset($elements['with'])) {
                $this->with($elements['with']);
                $data[$newsName] = $this->get();
            } else {
                $data[$newsName] = $this->all();
            }
        }

        return $data;
    }

    /**
     * Fetch rss news.
     *
     */
    public function get()
    {
        $requestUrl = $this->url.'?'.implode('&', $this->prepareQuery());

        return $this->execute($requestUrl);
    }

    /**
     * Fetch all rss news.
     *
     */
    public function all()
    {
        return $this->execute($this->url);
    }

    /**
     * Get rss news from url.
     *
     */
    private function execute($url)
    {
        $content = file_get_contents($url);

        return new \SimpleXmlElement($content);
    }

    /**
     * @return array
     */
    private function prepareQuery()
    {
       foreach ($this->query as $key => $value) {
           $string[] = "$key=$value";
       }

        return $string;
    }
}