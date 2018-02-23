<?php

namespace NewsReader\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use NewsReader\Contracts\NewsReaderInterface as NewsReader;
use NewsReader\Exceptions\NewsReaderException;

class NewsReaderController extends Controller
{
    /**
     * @var
     */
    public $news;

    /**
     * NetmkController constructor.
     * @param NewsReader $news
     */
    public function __construct(NewsReader $news)
    {
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $news = $this->news->mix([
            'vg' => [
                'url' => 'https://www.vg.no/rss/feed/',
                'with' => ['limit' => 10]
            ],
            'nrk' => [
                'url' => 'http://www.nrk.no/toppsaker.rss'
            ],
        ]);

        return view('netmk::index')->with(compact('news'));
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function vg()
    {
        $news = $this->news
            ->setUrl('https://www.vg.no/rss/feed/')
            ->with([
                //'categories' => 1,
                'keywords' => '',
                'limit' => 20
            ])
            ->get();

        $meta = (object)[
            'name' => 'VG',
            'style' => 'bg-light',
            'text' => 'text-black'
        ];

        return view('netmk::news')
            ->with(compact('news','meta'));
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function nrk()
    {
        $news = $this->news
            ->setUrl('http://www.nrk.no/toppsaker.rss')
            ->all();

        $meta = (object)[
            'name' => 'NRK',
            'style' => 'bg-light',
            'text' => 'text-white'
        ];

        return view('netmk::news')->with(compact('news', 'meta'));
    }
}
