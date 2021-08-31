<?php

namespace App\Http\Controllers;
use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
   public function apinya(){
        error_reporting(0);
        $json = file_get_contents('https://newsapi.org/v2/top-headlines?country=id&apiKey=62452a14ade1448782db6cdd38fbc81b');
        $content=utf8_encode($json);

        $item = json_decode($content,true);
        $unit=$item;
        foreach($unit['articles'] as $o){
            echo 'Author :'.$o['author'].'<br>';
            echo 'Title :'.$o['title'].'<br>';
            echo 'Description :'.$o['description'].'<br>';
            echo 'UrlToImage :'.$o['urlToImage'].'<hr>';
        }
        
    
   }
   public function simpan_berita(){
    error_reporting(0);
        $json = file_get_contents('https://newsapi.org/v2/top-headlines?country=id&apiKey=62452a14ade1448782db6cdd38fbc81b');
        $content=utf8_encode($json);

        $item = json_decode($content,true);
        $unit=$item;
        foreach($unit['articles'] as $o){
            
            $data               = New Berita;
            $data->source       = $o['source']['name'];
            $data->author       = $o['author'];
            $data->title       = $o['title'];
            $data->description       = $o['description'];
            $data->url       = $o['url'];
            $data->urlToImage       = $o['urlToImage'];
            $data->publishedAt       = $o['publishedAt'];
            $data->content       = $o['content'];
            $data->save();
        }
        
    
   }
}
