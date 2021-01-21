<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FreeCodeGram</title>

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>

<body class='bg-gray-200'>
    <nav class="px-6 py-5 bg-white flex justify-between mb-6">
        <ul class="flex item-center align-middle">
            <li class="px-3">
                <a href="{{ route("home") }}" class="flex font-bold text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    <div class="border-r-2 border-green-500 text-green-500 -ml-0.5"></div>
                    <p class="ml-2 text-base">FreeCodeGram</p>
                </a>
            </li>
            <li><a href="{{ route("dashboard") }}" class="p-3 font-medium">Dashboard</a></li>
            <li><a href="{{ route("posts") }}" class="p-3 font-medium">Posts</a></li>
        </ul>

        <ul class="flex item-center">
            @auth
            <li><a href="#" class="p-3 font-medium">{{ '@' . auth()->user()->username }}</a></li>
            <li>
                <form action="{{ route("logout") }}" method="post" class="inline p-3">
                    @csrf

                    <button type="submit" class="font-medium outline-none border-none">Logout</button>
                </form>
            </li>
            @endauth

            @guest
            <li><a href="{{ route("login") }}" class="p-3 font-medium">Login</a></li>
            <li><a href="{{ route("register") }}" class="p-3 font-medium">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>

</html>