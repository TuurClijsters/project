@extends('layout')

@section('content')


<div id="wrapper">
<div id="page" class="container">
    <div id="content">

    <div> {{ $article->title}} </div>
    <div> {{ $article->body}} </div>


</div>


@endsection