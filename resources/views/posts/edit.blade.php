@extends('layouts.app')
@section('content')

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">title</label><input name="title" type="text" id="title" "> <br>

    <label for="content">content</label><input name="content" type="text" id="content" value="{{ $post->content }}"> <br>

    <label for="image">image</label><input name="image" type="text" id="image" value="{{ $post->image }}"> <br> <br>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="title" aria-label="Recipient's username" aria-describedby="button-addon2">
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="content" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ $post->content }}">
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="image" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ $post->image }}">
    </div>
    
    <div class="sm:col-span-3">
        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
        <div class="mt-2">
            <select id="country" name="category_id" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                @foreach($categories as $category)
                <option {{ $category->id === $post->id ? 'selected' : ''}} value="{{ $category->id }}">1{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <p><select id='tags' size="3" multiple name="tags[]">
                <option disabled>Выбор тега</option>
                @foreach($tags as $tag)
                <option @foreach($post->tags as $postTag)
                    {{ $tag->id === $postTag->id ? 'selected' : ''}}
                    @endforeach
                    value="{{ $tag->id }}">{{ $tag->title }}
                </option>
                @endforeach
            </select></p>
        <p><input type="submit" value="Отправить"></p>

    </div>

    <button type="submit" class="bg-sky-500 hover:bg-sky-700">update</button>
</form>
@endsection