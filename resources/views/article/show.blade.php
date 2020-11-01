@extends('layouts.app')

@section('title', 'Статья {{$article->name}}')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
    <small><a href="{{ route('articles.edit', ['article' => $article->id]) }}">Редактировать статью</a></small>
    <small>
        <a href="{{ route('articles.destroy', ['article' => $article->id]) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">
            Удалить статью
        </a>
    </small>
@endsection
