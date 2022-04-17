<?php

namespace App\Support;
//use Illuminate\Support\Facades\Http;
//use SimpleXMLElement;
use Orchestra\Parser\Xml\Facade as Xml;
class FeedReader
{

    protected  $document = null;

    public function __construct(protected string $url)
    {

    }

    public function read():static
    {
        if($this->loaded())
        {
            return $this;
        }

//        $response= Http::get($this->url)->body();
        $this->document = simplexml_load_string($response);

        return $this;
    }

    public function loaded(): bool
    {
        return $this->document != null;
    }
}
