@extends('layouts.app')


@section('content')
<h1>Liste des articles</h1>
@if ($posts->count() > 0)
    @foreach ($posts as $post)
        <h3><a href="#">{{ $post->title }}</a></h3>
    @endforeach
    @else
        <span>Aucun post ce trouve dans la bdd</span>
    @endif
@endsection



