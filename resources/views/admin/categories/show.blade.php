@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>{{ ucfirst($category->name) }}</h2>
        <p class="content">{{ $category->description }}</p>

        <div class="row g-3">
            @foreach ($posts as $post)
            <div class="col-sm-6 col-md-4">
                <div class="card h-100">
                    @if ($post->image)
                        <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                    @else
                        <img src="{{ asset('storage/placeholder.png') }}" class="card-img-top" alt="{{ $post->title }}"> {{--TODO: Logica giusta ma non funziona... anche se non disponibile, l'if trova sempre l'img--}}
                    @endif
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title">{{ ucfirst($post->title) }}</h5>
                        <p class="card-text flex-grow-1">{{ $post->excerpt }}</p>
                        <a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-3">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
<style>
    .content {
        text-align: left;
    }
</style>
