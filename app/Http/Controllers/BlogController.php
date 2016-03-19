<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use GuzzleHttp\Client as HttpClient;
use Riot\Facades\Api as R_API;
use Riot\Facades\EndPoints;
class BlogController extends Controller {

    public function index() {

        $sum = new EndPoints\SummonerById();
        echo (R_API::get($sum->buildUrl(array(
            'summonerIds'=>52096153,
            'region'=>'eune'
        )))); 
        
//        $client = new HttpClient( [
//                'verify' => false
//        ]);
//        $res = $client->get('https://eune.api.pvp.net/api/lol/static-data/eune/v1.2/champion/4?api_key=b246e73f-6f17-4eb2-ad8d-6e4292a02875');
//        echo $res->getStatusCode();
//// 200
//        echo $res->getHeaderLine('content-type');
//// 'application/json; charset=utf8'
//        echo $res->getBody();
//// {"type":"User"...'
//
//        $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
//        $promise = $client->sendAsync($request)->then(function ($response) {
//            echo 'I completed! ' . $response->getBody();
//        });
//        $promise->wait();
////        $posts = Post::where('published_at', '<=', Carbon::now())
//                ->orderBy('published_at', 'desc')
//                ->paginate(config('blog.posts_per_page'));
//        return view('blog.index', compact('posts'));
    }

    public function showPost($slug) {
//        $post = Post::whereSlug($slug)->firstOrFail();
//        return view('blog.post')->withPost($post);
    }

}
