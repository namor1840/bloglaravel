<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="font-sans bg-gray-100">

    <nav class="bg-blue-500 p-4">
        <ul class="flex space-x-4">
            <li><a href="{{ route('blogs.index') }}" class="text-white">Home</a></li>
            <li><a href="{{ route('blogs.create') }}" class="text-white">Create Blog</a></li>
        </ul>
    </nav>

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

</body>
</html>
