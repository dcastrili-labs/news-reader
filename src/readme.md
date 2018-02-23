# Get news in your website via rss

## Usage

Adding a single rss

```php
 use NewsReader\Service\NewsReader as Reader;
 
 $news = new Reader();
 
 $collection = $news->setUrl('https://www.vg.no/rss/feed/')
            ->with([
                //'categories' => 1,
                'keywords' => '',
                'limit' => 20
            ])
            ->get();
 ```
 Mixing different rss to the same view
 
```php
use NewsReader\Service\NewsReader as Reader;
 
$news = new Reader();
 
$collection = $this->news->mix([
            'vg' => [
                'url' => 'https://www.vg.no/rss/feed/',
                'with' => ['limit' => 10]
            ],
            'nrk' => [
                'url' => 'http://www.nrk.no/toppsaker.rss'
            ],
        ]);
 ```
 Styling
 
 ```php
  $meta = (object)[
            'name' => 'VG',
            'style' => 'bg-light',
            'text' => 'text-black'
        ];
        
  return view('news-reader::news')
            ->with(compact('meta','collection'));
  ```          
        
        
## License

The news reader is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
