@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center items-center">
    <h2 class="w-5/12 text-2xl mb-8 font-medium text-center">Login to FreeCodeGram</h2>
    <div class="w-5/12 bg-white p-6 rounded-lg">
        @if (session("status"))
        <div class="bg-red-400 px-4 py-3 rounded-lg mb-6 text-white text-center">
            {{ session("status") }}
        </div>
        @endif

        <form action="{{route("login")}}" method="post">
            @csrf

            <div class="mb-4">
                <label for="email" class="font-medium text-gray-600 text-sm ml-1">Email address</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-100 border-2 w-full px-4 py-3 mt-2 rounded-lg @error('email') border-red-400 @enderror"
                    placeholder="Your email address" value="{{ old("email") }}">

                @error('email')
                <div class="text-red-400 test-sm mt-2">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="font-medium text-gray-600 text-sm ml-1">Password</label>
                <input type="password" name="password" id="password"
                    class="bg-gray-100 border-2 w-full px-4 py-3 mt-2 rounded-lg @error('password') border-red-400 @enderror"
                    placeholder="Your password" value="">

                @error('password')
                <div class="text-red-400 test-sm mt-2">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-8">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-4">
                    <label for="remember">Remember me</label>
                </div>
            </div>

            <div>
                <button type="submit"
                    class="bg-green-500 text-white font-medium w-full rounded px-4 py-3">Login</button>
            </div>
        </form>
    </div>

    <p class="font-medium my-4">Don't have an account? &nbsp;<a class="text-green-500"
            href="{{route("register")}}">Register
            here</a></p>
</div>
@endsection