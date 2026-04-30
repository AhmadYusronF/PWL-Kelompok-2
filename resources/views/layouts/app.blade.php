<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <header class="bg-blue-800 text-white shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Capstone Team 2</h1>

            <nav class="space-x-4">
                <a href="/" class="hover:text-blue-500">Home</a>
                <a href="/about" class="hover:text-blue-500">About</a>
                <a href="/blog" class="hover:text-blue-500">Blog</a>
                <a href="/contact" class="hover:text-blue-500">Contact</a>
            </nav>
        </div>
    </header>

    <main class="flex-1 max-w-6xl mx-auto w-full px-4 py-6">
        @yield('content')
    </main>

    <footer class="bg-white shadow-inner mt-10">
        <div class="max-w-6xl mx-auto px-4 py-4 text-center text-sm text-gray-500">
            © {{ date('Y') }} Capstone Team 2.
        </div>
    </footer>

</body>
</html>