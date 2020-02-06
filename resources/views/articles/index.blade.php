@extends('layout')

@section('content')
<div id ='wrapper'>
    <div id = "page" class="container">

        <h1>Articles</h1>

        <ul class="style1">
            @foreach($articles as $article)
            <li class="first">
                <h3>{{ $article->title }}</h3>  
                <p><a href="{{ route('articles.show', $article )}}">{{$article->body}}</a></p>
            </li>
            @endforeach
        </ul>

    </div>
</div>

@endsection