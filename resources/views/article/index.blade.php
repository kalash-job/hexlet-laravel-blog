@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    <h1>Список статей</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <small><a href="{{ route('articles.create') }}">Добавить новую статью</a></small>
    @foreach($articles as $article)
        <h2><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{$article->name}}</a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
        <small>
            <a href="{{ route('articles.destroy', ['id' => $article->id]) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">
                Удалить статью
            </a>
        </small>
    @endforeach
    {{ $articles->links() }}
@endsection
