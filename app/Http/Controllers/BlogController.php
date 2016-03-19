<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use GuzzleHttp\Client as HttpClient;

class BlogController extends Controller {

    public function index() {
        $request = (new HttpClient)->get('http://httpbin.org');
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo 'I completed! ' . $response->getBody();
        });
        $promise->wait();
//        $posts = Post::where('published_at', '<=', Carbon::now())
//                ->orderBy('published_at', 'desc')
//                ->paginate(config('blog.posts_per_page'));
//        return view('blog.index', compact('posts'));
    }

    public function showPost($slug) {
//        $post = Post::whereSlug($slug)->firstOrFail();
//        return view('blog.post')->withPost($post);
    }

}
