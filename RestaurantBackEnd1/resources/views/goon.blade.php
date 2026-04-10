<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goon Restaurant</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

<!-- Navbar -->
<!-- <nav class="bg-white shadow">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-red-500">Goon Restaurant</h1>
        <div class="space-x-6">
            <a href="#menu" class="hover:text-red-500">Menu</a>
            <a href="#about" class="hover:text-red-500">About</a>
            <a href="#contact" class="hover:text-red-500">Contact</a>
        </div>
    </div>
</nav> -->
<header class="w-full max-w-6xl mx-auto px-4 py-4 text-sm mb-6">
    @if (Route::has('login'))
        <nav class="flex items-center justify-between">

            <!-- LEFT: Logo / Title -->
            <h1 class="text-2xl font-bold text-black">
                Goon Restaurant
            </h1>

            <!-- RIGHT: Auth Links -->
            <div class="flex items-center gap-4">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 text-black border border-gray-300 hover:border-gray-500 rounded-sm text-sm"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 text-black border border-transparent hover:border-gray-300 rounded-sm text-sm"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 text-black border border-gray-300 hover:border-gray-500 rounded-sm text-sm"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </div>

        </nav>
    @endif
</header>
<!-- Hero -->
<section class="text-center py-20 bg-red-500 text-white">
    <h1 class="text-5xl font-bold mb-4">Welcome to Goon Restaurant</h1>
    <p class="text-xl mb-6">Fresh food. Great vibes.</p>
    <button class="bg-white text-red-500 px-6 py-3 rounded font-semibold hover:bg-gray-100">
        View Menu
    </button>
</section>

<!-- Menu -->
<section id="menu" class="max-w-6xl mx-auto py-16 px-4">
    <h2 class="text-3xl font-bold text-center mb-10">Our Menu</h2>

    <div class="grid md:grid-cols-3 gap-8">

        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-xl font-semibold mb-2">Margherita Pizza</h3>
            <p class="text-gray-600 mb-2">Classic tomato, mozzarella & basil.</p>
            <span class="font-bold">€10</span>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-xl font-semibold mb-2">Goon Burger</h3>
            <p class="text-gray-600 mb-2">Beef patty, cheese, lettuce & sauce.</p>
            <span class="font-bold">€12</span>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h3 class="text-xl font-semibold mb-2">Pasta Carbonara</h3>
            <p class="text-gray-600 mb-2">Creamy sauce with pancetta.</p>
            <span class="font-bold">€11</span>
        </div>

    </div>
</section>

<!-- About -->
<section id="about" class="bg-white py-16">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-3xl font-bold mb-6">About Us</h2>
        <p class="text-gray-600">
            Goon Restaurant is a small place focused on fresh ingredients and simple,
            delicious meals. Our mission is to bring great food and a relaxed atmosphere
            to everyone who walks through our doors.
        </p>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="py-16 text-center">
    <h2 class="text-3xl font-bold mb-6">Contact</h2>
    <p class="text-gray-600 mb-4">Nijmegen, Netherlands</p>
    <p class="text-gray-600 mb-6">Phone: +31 123 456 789</p>
    <button class="bg-red-500 text-white px-6 py-3 rounded hover:bg-red-600">
        Make a Reservation
    </button>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white text-center py-6 mt-10">
    <p>© 2026 Goon Restaurant</p>
</footer>

</body>
</html>