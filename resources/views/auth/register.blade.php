@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-5/12 bg-white p-6 rounded-lg">
        <form action="{{route("register")}}" method="post">
            @csrf

            <div class="mb-4">
                <label for="name" class=" sr-only">Name</label>
                <input type="text" name="name" id="name"
                    class="bg-gray-100 border-2 w-full px-4 py-3 rounded-lg @error('name') border-red-400 @enderror"
                    placeholder="Your name" value="{{ old("name") }}">

                @error('name')
                <div class="text-red-400 test-sm mt-2">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class=" sr-only">Username</label>
                <input type="text" name="username" id="username"
                    class="bg-gray-100 border-2 w-full px-4 py-3 rounded-lg @error('username') border-red-400 @enderror"
                    placeholder="Your username" value="{{ old("username") }}">

                @error('username')
                <div class="text-red-400 test-sm mt-2">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class=" sr-only">Email address</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-100 border-2 w-full px-4 py-3 rounded-lg @error('email') border-red-400 @enderror"
                    placeholder="Your email address" value="{{ old("email") }}">

                @error('email')
                <div class="text-red-400 test-sm mt-2">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class=" sr-only">Password</label>
                <input type="password" name="password" id="password"
                    class="bg-gray-100 border-2 w-full px-4 py-3 rounded-lg @error('password') border-red-400 @enderror"
                    placeholder="Choose a password" value="">

                @error('password')
                <div class="text-red-400 test-sm mt-2">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class=" sr-only">Password again</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="bg-gray-100 border-2 w-full px-4 py-3 rounded-lg @error('password_confirmation') border-red-400 @enderror"
                    placeholder="Repeat your password" value="">

                @error('password_confirmation')
                <div class="text-red-400 test-sm mt-2">{{$message}}</div>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="bg-green-500 text-white font-medium w-full rounded px-4 py-3">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection