<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sludinājumu Portāls</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Alpine.js for Interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900">
    <!-- Header -->
    <header class="bg-white shadow dark:bg-gray-800">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <svg class="h-8 w-auto text-blue-600 dark:text-blue-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L2 22H22L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="ml-2 text-xl font-semibold text-gray-800 dark:text-white">Sludinājumu Portāls</span>
            </div>

            <!-- Navigation -->
            <nav class="flex items-center space-x-4">
                <a href="#" class="text-gray-800 dark:text-white hover:text-blue-600">Home</a>
                <a href="#" class="text-gray-800 dark:text-white hover:text-blue-600">Categories</a>
                <a href="#" class="text-gray-800 dark:text-white hover:text-blue-600">Post Ad</a>
                <a href="#" class="text-gray-800 dark:text-white hover:text-blue-600">Login</a>
                <a href="#" class="text-gray-800 dark:text-white hover:text-blue-600">Register</a>
            </nav>
        </div>
    </header>

    <!-- Search Bar -->
    <div class="container mx-auto px-6 py-8">
        <form class="flex items-center">
            <input
                type="text"
                placeholder="Search for ads..."
                class="w-full px-4 py-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <button
                type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
                Search
            </button>
        </form>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <!-- Featured Ads -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Featured Ads</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Ad Card 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1485965120184-e220f721d03e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmljeWNsZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Used Bicycle" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Used Bicycle</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Great condition, barely used. Perfect for city rides.</p>
                        <p class="text-blue-600 dark:text-blue-400 mt-4 font-semibold">€150</p>
                        <div class="mt-6 flex space-x-4">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                onclick="alert('View Details: Used Bicycle')"
                            >
                                View Details
                            </button>
                            <button
                                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                                onclick="alert('Contact Seller: Used Bicycle')"
                            >
                                Contact Seller
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Ad Card 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXBhcnRtZW50fGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="Apartment for Rent" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Apartment for Rent</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">2-bedroom apartment in the city center.</p>
                        <p class="text-blue-600 dark:text-blue-400 mt-4 font-semibold">€800/month</p>
                        <div class="mt-6 flex space-x-4">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                onclick="alert('View Details: Apartment for Rent')"
                            >
                                View Details
                            </button>
                            <button
                                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                                onclick="alert('Contact Seller: Apartment for Rent')"
                            >
                                Contact Seller
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Ad Card 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG91c2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="House for Sale" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">House for Sale</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Spacious 3-bedroom house with a garden.</p>
                        <p class="text-blue-600 dark:text-blue-400 mt-4 font-semibold">€250,000</p>
                        <div class="mt-6 flex space-x-4">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                onclick="alert('View Details: House for Sale')"
                            >
                                View Details
                            </button>
                            <button
                                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                                onclick="alert('Contact Seller: House for Sale')"
                            >
                                Contact Seller
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Categories</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 text-center hover:bg-blue-50 dark:hover:bg-gray-700 transition-colors duration-300">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZWxlY3Ryb25pY3N8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Electronics" class="w-full h-24 object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Electronics</h3>
                </a>
                <a href="#" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 text-center hover:bg-blue-50 dark:hover:bg-gray-700 transition-colors duration-300">
                    <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2Fyc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Vehicles" class="w-full h-24 object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Vehicles</h3>
                </a>
                <a href="#" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 text-center hover:bg-blue-50 dark:hover:bg-gray-700 transition-colors duration-300">
                    <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVhbCUyMGVzdGF0ZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Real Estate" class="w-full h-24 object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Real Estate</h3>
                </a>
                <a href="#" class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 text-center hover:bg-blue-50 dark:hover:bg-gray-700 transition-colors duration-300">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8am9ic3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Jobs" class="w-full h-24 object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Jobs</h3>
                </a>
            </div>
        </section>

        <!-- Recent Listings -->
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Recent Listings</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Listing Card 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZnVybml0dXJlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="Furniture" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Furniture Set</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Modern furniture set for your living room.</p>
                        <p class="text-blue-600 dark:text-blue-400 mt-4 font-semibold">€500</p>
                        <div class="mt-6 flex space-x-4">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                onclick="alert('View Details: Furniture Set')"
                            >
                                View Details
                            </button>
                            <button
                                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                                onclick="alert('Contact Seller: Furniture Set')"
                            >
                                Contact Seller
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Listing Card 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8aGVhZHBob25lc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Headphones" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Wireless Headphones</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">High-quality noise-canceling headphones.</p>
                        <p class="text-blue-600 dark:text-blue-400 mt-4 font-semibold">€120</p>
                        <div class="mt-6 flex space-x-4">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                onclick="alert('View Details: Wireless Headphones')"
                            >
                                View Details
                            </button>
                            <button
                                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                                onclick="alert('Contact Seller: Wireless Headphones')"
                            >
                                Contact Seller
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Listing Card 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d2F0Y2hlc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Watch" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Smart Watch</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Latest smartwatch with health tracking features.</p>
                        <p class="text-blue-600 dark:text-blue-400 mt-4 font-semibold">€200</p>
                        <div class="mt-6 flex space-x-4">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring
                                                                focus:ring-blue-500"
                                onclick="alert('View Details: Smart Watch')"
                            >
                                View Details
                            </button>
                            <button
                                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500"
                                onclick="alert('Contact Seller: Smart Watch')"
                            >
                                Contact Seller
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-800 shadow mt-12">
        <div class="container mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- About Section -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">About Us</h3>
                    <p class="text-gray-600 dark:text-gray-400">Sludinājumu Portāls is your go-to platform for buying and selling items, finding jobs, and discovering real estate opportunities.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600">Home</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600">Categories</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600">Post Ad</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600">Login</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600">Register</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="text-gray-600 dark:text-gray-400">Email: info@sludinajumuportals.com</li>
                        <li class="text-gray-600 dark:text-gray-400">Phone: +371 1234 5678</li>
                        <li class="text-gray-600 dark:text-gray-400">Address: 123 Main St, Riga, Latvia</li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-200 dark:border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-600 dark:text-gray-400">&copy; 2023 Sludinājumu Portāls. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>