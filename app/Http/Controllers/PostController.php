<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller{

    public function index()
    {

        //recupère tous mes posts dans la bdd
        $posts = Post::all();

        //die and dump pour savoir ce qu'il y a dans ma variable posts (donnée de la bdd)
        //dd($posts);

        return view('articles',[
            'posts'=> $posts
        ]);
    }

    public function show($id)
    {
        $posts = [
            1=>'Mon titre n°1',
            2=>'Mon titre n°2'
        ];

        $post = $posts[$id] ?? 'pas de titre';

        return view('article', [
            'post'=>$post
        ]);

    }

    public function contact()
    {
        return view('contact');
    }


}