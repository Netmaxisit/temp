<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Beautiful Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-xl font-semibold text-gray-700">My Website</div>
                <div class="space-x-4">
                    <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">About</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-12">
        <section class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to My Website</h1>
            <p class="text-lg text-gray-600 mb-8">This is a sample landing page built with PHP and Tailwind CSS.</p>
            <?php
                $name = "John Doe";
                $age = 25;
                echo "<p class='text-gray-700'>Hello, my name is $name and I'm $age years old.</p>";
            ?>
        </section>

        <section class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Feature 1</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Feature 2</h3>
                    <p class="text-gray-600">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Feature 3</h3>
                    <p class="text-gray-600">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto px-6 text-center">
            <p class="text-white">&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
