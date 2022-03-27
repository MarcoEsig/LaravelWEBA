@extends('layouts.app')


@section('content')
<h1>Liste des articles</h1>
<hr>
@if ($posts->count() > 0)
    @foreach ($posts as $post)
        <h3><b><a href="{{ route('posts.show',['id' => $post->id])}}">{{ $post->title }}</a></b></h3>
    @endforeach
    @else
        <span>Aucun post ce trouve dans la bdd</span>
    @endif
@endsection



