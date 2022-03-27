<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{

    public function index()
    {
        //recupère tous mes posts dans la bdd
        $posts = Post::all();

        //$posts = Post::orderBy('title')->take(3)->get();

        //die and dump pour savoir ce qu'il y a dans ma variable posts (les données de la bdd)
        //dd($posts);

        return view('articles',[
            'posts'=> $posts
        ]);
    }

    public function show($id)
    {
        //va chercher dans la bdd Post avec la fonction find l'attribut id
        $post = Post::findOrFail($id);

       //Chercher un texte spécifique de la bdd
       //$post = Post::where('title','=','Deserunt ipsum expedita quo rem laboriosam rerum.')->firstOrFail();
       
       //affichage dans un die and dump
       //dd($post);

        return view('article', [
            'post'=>$post
        ]);

    }
    public function create()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        //Mauvaise façon de faire mais marche
        /*$post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        */

        //Meilleur façon de faire mais on doit créer dans notre model les champs qu'on va remplir
        Post::create([
            'title'=> $request->title,
            'content' => $request->content
        ]);

        dd('Post créer');
    }

    public function contact()
    {
        return view('contact');
    }



}