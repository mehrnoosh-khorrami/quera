<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;


trait ScraperTrait
{
    private $baseUrl = 'https://quera.ir';

    public function setBaseUrl($url)
    {
        $this->baseUrl = $url;
    }

    public function getPage() {
        return Http::get($this->baseUrl . '/blog')->body();
    }

    public function getPageTitle($page)
    {
        preg_match('/<title>(.*)<\/title>/', $page, $matches);
        return $matches[1];
    }

    public function getPostTitles($page)
    {
        preg_match_all('/<h4>.*?<a.*?>(.*?)<\/a>.*?<\/h4>/', $page, $matches);
        return $matches[1];
    }
}