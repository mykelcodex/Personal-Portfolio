<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;



class PagesController extends Controller
{
    public function index(){

        return view('index');

    }

    public function about(){

        return view('about');

    }

   /* public function blog(){

        $client = new Client([
            'base_uri' => 'https://newsapi.org/v2/?q=bitcoin&apiKey=afae79dbba7f468d8877f209650d4408',
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', 'everything');
        $posts = json_decode( $response);
        return view('blog', compact('posts'));

    }*/

    public function projects(){

        return view('projects');
        
    }

    public function contact(){

        return view('contact');
        
    }
}
