<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}
</head>
<body class="font-sans bg-black">

    <nav class="bg-green-400 p-4">
        <ul class="flex space-x-4">
            <li><a href="{{ route('blogs.index') }}" class="text-black">Home</a></li>
            <li><a href="{{ route('blogs.create') }}" class="text-black">Create entry</a></li>
            <li><form action="{{ route('blogs.search') }}" method="GET">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit" class="text-black">Search</button>
            </form></li>
        </ul>
    </nav>

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

</body>
</html>
