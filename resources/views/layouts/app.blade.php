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
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex item-center">
            <li><a href="{{ route("home") }}" class="p-3 font-medium">Home</a></li>
            <li><a href="{{ route("dashboard") }}" class="p-3 font-medium">Dashboard</a></li>
            <li><a href="{{ route("posts") }}" class="p-3 font-medium">Posts</a></li>
        </ul>

        <ul class="flex item-center">
            @auth
            <li><a href="#" class="p-3 font-medium">Soumya</a></li>
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