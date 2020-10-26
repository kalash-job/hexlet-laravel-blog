@extends('layouts.app')

@section('title', 'Редактирование статьи')

@section('content')
    <h1>Редактирование статьи</h1>
    {{ Form::model($article, ['url' => route('articles.update', $article), 'method' => 'PATCH']) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
    {{ Form::close() }}
@endsection
