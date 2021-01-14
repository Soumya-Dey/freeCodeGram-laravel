@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
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
</div>
@endsection