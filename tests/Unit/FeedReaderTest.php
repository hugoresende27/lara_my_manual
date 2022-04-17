<?php

use App\Support\FeedReader;
use Tests\TestCase;

function reader(): FeedReader
{
    return new FeedReader('http://www.podcast411.com/new_demo_feed.xml');
}

uses (TestCase::class);

it('can be create', function()
{
   expect(reader())
       ->toBeInstanceOf(FeedReader::class);
});

it ('can read feed', function ()
{
    $reader = reader();
    expect($reader->read())
        ->loaded()->toBeTrue();

});
