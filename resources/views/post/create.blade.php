@extends('layouts.main')
@section('content')

    <form action="{{ route('post.store') }}" method="post">
        @csrf

        <button class="ease-in duration-300 bg-yellow-500 ">Button A</button>
        <br>
        <button class="ease-out duration-300 bg-yellow-500">Button B</button>
        <br>
        <button class="ease-in-out duration-300 text-yellow-500">Button C</button>
        <br>
        <button class="bg-sky-500 hover:bg-sky-700">Save changes</button>
        <br>
        {{-- {{ old('content') }}--}}
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

        <button type="submit" class="bg-sky-500 hover:bg-sky-700">hesoyam</button>


        <br>
        <br>

        <div class="sm:col-span-3">
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


        <br>
        <br>
        <br>
        <br>

        <p><select id='tags' size="3" multiple name="tags[]">
                <option disabled>Выбор тега</option>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select></p>
        <p><input type="submit" value="Отправить"></p>

        <br> <br>

        <div class="sm:col-span-3">
            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
            <div class="mt-2">
                <select id="country" name="category_id" autocomplete="country-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">

                    <option>1</option>

                </select>
            </div>
        </div>

    </form>
@endsection
