@extends('layouts.base')

@section('page-content')
<h1>Lista dei Posts</h1>
<ul>
    @foreach ($posts as $post)
    <li>
        <a href="{{route("posts.show", $post)}}">
            <img src="{{$post->image}}" alt="{{$post->title}}">
            <h3>{{$post->title}}</h3>
        </a>
    </li>
    @endforeach
</ul>
@endsection
