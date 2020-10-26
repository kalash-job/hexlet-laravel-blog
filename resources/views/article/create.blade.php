@extends('layouts.app')

@section('title', 'Добавление статьи')

@section('content')
    <h1>Добавление статьи</h1>
    {{ Form::model($article, ['url' => route('articles.store')]) }}
    @include('article.form')
    {{ Form::submit('Создать') }}
    {{ Form::close() }}
@endsection
