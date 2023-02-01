@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success_delete'))
            <div class="alert alert-warning" role="alert">
                Post with ID {{ session('success_delete')->id }} eliminated!
            </div>
        @endif

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Excerpt</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ ucfirst($post->title) }}</td>
                        @if ($post->category == null)
                            <td>Inexistent!</td>
                        @else
                            <td>{{ $post->category->name }}</td>
                        @endif
                        <td>{{ $post->excerpt }}</td>
                        <td><a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="btn btn-primary">Visit</a></td>
                        <td><a href="{{ route('admin.posts.edit', ['post' => $post]) }}" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form action="{{ route('admin.posts.destroy', ['post' => $post]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
@endsection

