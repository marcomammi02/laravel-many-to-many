@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>{{ ucfirst($category->name) }}</h2>
        <p class="content">{{ $category->description }}</p>

        <ul>
            @foreach ($category->posts as $post)
            <li><a href="{{ route('admin.posts.show', ['post' => $post])}}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
<style>
    .content, ul {
        text-align: left;
    }
</style>
