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

    <div class="w-9/12 bg-white p-6 rounded-lg mb-6">
        @if ($posts->count())
        @foreach ($posts as $post)
        <div class="mb-4">
            <a href="!#" class="font-bold">{{$post->user->username}}</a> <span
                class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span>
            <p class="mt-2 mb-4">{{ $post->body }}</p>

            <div class="flex items-center">
                <form action="" method="post" class="mr-4">
                    @csrf
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-green-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                    </button>
                </form>
                <form action="" method="post" class="mr-4">
                    @csrf
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-red-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.096c.5 0 .905-.405.905-.904 0-.715.211-1.413.608-2.008L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        @endforeach

        {{$posts->links()}}
        @else
        <p>There are no posts!</p>
        @endif
    </div>
</div>
@endsection