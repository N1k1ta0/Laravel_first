@extends('layouts.app')
@section('content')

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @error('title')
        <p class="bg-red-500 hover:bg-sky-700">{{ $message }}</p>
        @enderror
        {{ old('content') }}

        <label for="title">title</label>
        <input name="title" type="text" id="title" value="title"> <br>

        @error('content')
        <p class="bg-red-500 hover:bg-sky-700">{{ $message }}</p>
        @enderror
        {{ old('content') }}

        <label for="content">content</label>
        <input name="content" type="text" id="content" value="title"> <br>

        @error('image')
        <p class="bg-red-500 hover:bg-sky-700">{{ $message }}</p>
        @enderror
        {{ old('content') }}

        <label for="image">image</label>
        <input name="image" type="text" id="image" value="title"> <br>

        <button type="submit" class="bg-sky-500 hover:bg-sky-700 rounded-full">hesoyam</button>

        <div class="my-8">
            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
            <div class="mt-2">
                <select id="country" name="category_id" autocomplete="country-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <p><select id='tags' size="3" multiple name="tags[]">
                <option disabled>Выбор тега</option>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
@endsection
