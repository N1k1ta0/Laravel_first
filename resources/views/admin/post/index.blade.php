@extends('layouts.admin')

@section('content')
<div>
    <div>
        <a href="{{ route('posts.create') }}">Add one1</a>
    </div>
    @foreach($posts as $post)
    <div>
        <a href="{{ route ('posts.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a>
    </div>
    @endforeach
    <div class="mt-3">
    @foreach($posts->links() as $post)
        {{ $post }}
    @endforeach
    </div>
</div>

@endsection