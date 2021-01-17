@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center">
    <div class="w-9/12 bg-white p-6 rounded-lg mb-6">
        <form action="{{ route("posts") }}" method="post">
            @csrf
            <div>
                <label for="body" class="sr-only">Body</label>
                <div class="relative">
                    <textarea name="body" id="body" cols="30" rows="5"
                        class="bg-gray-100 border-2 w-full px-4 py-3 rounded-lg resize-none @error('body') border-red-400 @enderror"
                        placeholder="What's Happening..."></textarea>

                    <button type="submit"
                        class="bg-green-500 text-white px-8 py-2 rounded font-medium absolute bottom-5 right-4">Post</button>
                </div>

                @error('body')
                <div class="text-red-400 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>

            </div>
        </form>
    </div>

    <div class="w-9/12 bg-white p-6 rounded-lg mb-4">
        @if ($posts->count())
        @foreach ($posts as $post)
        <div class="mb-4">
            <a href="!#" class="font-bold">{{$post->user->username}}</a> <span
                class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span>
            <p class="mt-2">{{ $post->body }}</p>
        </div>
        @endforeach

        {{$posts->links()}}
        @else
        <p>There are no posts!</p>
        @endif
    </div>
</div>
@endsection