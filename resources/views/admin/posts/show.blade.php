@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>{{ ucfirst($post->title) }}</h2>
        <p>
            Category:
            @if ($post->category == null)
                <td>Inexistent!</td>
            @else
                <td>{{ $post->category->name }}</td>
            @endif
        </p>
        @if ($post->uploaded_img)
            <img src="{{ asset('storage/' . $post->uploaded_img) }}" alt="{{ $post->title }} img">
        @else
            <img src="{{ $post->image }}" alt="{{ $post->title }} image">
        @endif
        <p class="content">{{ $post->content }}</p>
    </div>
@endsection
<style>
    img {
        margin: 2rem 0;
        max-width: 750px;
    }

    .content {
        text-align: left;
    }
</style>
