@extends('layouts.app')

@section('content')
<h1>contenu de l'article </h1>
<h1><b>{{ $post->content}}</b></h1>
<hr>
<h1>Commentaire</h1>
@forelse($post->comments as $comment)
<!--Vu que c'est une instance de carbone une librairie q'utilise Laravel on peut utiliser des fonctions comme format-->
    <div>{{ $comment->content}} | crée le {{$comment->created_at->format('d/m/Y') }}</div>
@empty
    <span>Aucun commentaire pour ce post</span>
@endforelse


@endsection

        
