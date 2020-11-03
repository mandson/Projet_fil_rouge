<?php

namespace App;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use Illuminate\Database\Eloquent\Model;

class internationalArticle extends Model
{
    //

    private $url="https://newsapi.org/v2/";
    private $key="9fef91df573148588901f81df2c8456b";

  /******************************    POLITIQUE INTERNATIONAL API                ******************************************/
    function getsources(){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."sources=google-news-fr?apiKey=".$this->key);
            $sources=json_decode($apiRequest->getBody()->getContents());
            return $sources;
        }catch (RequestException $e){

        }

    }
    function getarticles($source="BFMTV",$category="business",$language="fr",$country="fr"){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."top-headlines?country=".$country."&category=".$category."&apiKey=".$this->key);
            $country=json_decode($apiRequest->getBody()->getContents());
            return $country;
        }catch (RequestException $e){

        }
    }
    function getTopnews(){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."top-headlines?country=en&pageSize=15&apiKey=".$this->key);
            $source=json_decode($apiRequest->getBody()->getContents());
            return $source;
        }catch (RequestException $e){
        }
    }

}
