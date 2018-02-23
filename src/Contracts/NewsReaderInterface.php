<?php

namespace NewsReader\Contracts;

interface NewsReaderInterface
{
    /**
     * @param $url
     * @return mixed
     */
    public function setUrl($url);

    /**
     * @param $queryString
     * @return mixed
     */
    public function with($queryString);

    /**
     * @return mixed
     */
    public function get();

    /**
     * @return mixed
     */
    public function all();

    /**
     * @return mixed
     */
    public function mix($array);

}
