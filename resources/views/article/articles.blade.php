@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    <h1>Статьи</h1>
    @foreach($articles as $article)
        <h2>{{$article->name}}</h2>
        <div>{{$article->body}}</div>
    @endforeach
@endsection
