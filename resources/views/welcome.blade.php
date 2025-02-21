<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sludinajumuPortals</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900">
<header class="bg-white shadow dark:bg-gray-800">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <svg class="h-8 w-auto text-blue-600 dark:text-blue-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 22H22L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="ml-2 text-xl font-semibold text-gray-800 dark:text-white">Sludinājumu protāls</span>
        </div>
        <nav class="flex items-center space-x-4">
            <a href="#" class="text-gray-800 dark:text-white hover:text-blue-600">Home</a>
            <a href="#" class="text-gray-800 dark:text-white hover:text-blue-600">Categories</a>
            <a href="#" class="text-gray-800 dark:text-white hover:text-blue-600">Post Ad</a>
            <div class="flex items-center space-x-4">
                <!-- Login Button -->
                <a href="/login" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                Login
            </a>
            <a href="/register" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-300">
                Register
            </a>

            </div>
        </nav>
    </div>
</header>

    <div class="container mx-auto px-6 py-8">
        <form class="flex items-center">
            <input type="text" placeholder="Search for ads..." class="w-full px-4 py-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Search</button>
        </form>
    </div>

    <main class="container mx-auto px-6 py-8" x-data="{ selectedCategory: 'transport' }">
        <!-- Upper Categories -->
        <section class="mb-8">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
                <!-- Transport -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'transport'">
                    <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2Fyc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Transport" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Transport</h3>
                    </div>
                </div>
                <!-- Real Estate -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'real-estate'">
                    <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVhbCUyMGVzdGF0ZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Real Estate" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Real Estate</h3>
                    </div>
                </div>
                <!-- Jobs and Services -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'jobs'">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8am9ic3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Jobs and Services" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Jobs and Services</h3>
                    </div>
                </div>
                <!-- Electronics -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'electronics'">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZWxlY3Ryb25pY3N8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Electronics" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Electronics</h3>
                    </div>
                </div>
                <!-- Construction -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'construction'">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZnVybml0dXJlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="Construction" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Construction</h3>
                    </div>
                </div>
                <!-- Production -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'production'">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8am9ic3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Production" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Production</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subcategory Window -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-8">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Subcategories</h3>
            <div x-show="selectedCategory === 'transport'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Cars</div>
                <div class="text-gray-600 dark:text-gray-400">Commercial Vehicles</div>
                <div class="text-gray-600 dark:text-gray-400">Moto Transport</div>
                <div class="text-gray-600 dark:text-gray-400">Water Transport</div>
                <div class="text-gray-600 dark:text-gray-400">Transport Rent</div>
                <div class="text-gray-600 dark:text-gray-400">Personal Transport</div>
                <div class="text-gray-600 dark:text-gray-400">Air Transport</div>
                <div class="text-gray-600 dark:text-gray-400">Disabled Persons Transports</div>
                <div class="text-gray-600 dark:text-gray-400">RVs, Trailers</div>
                <div class="text-gray-600 dark:text-gray-400">Car Service Equipment</div>
            </div>
            <div x-show="selectedCategory === 'real-estate'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Apartments</div>
                <div class="text-gray-600 dark:text-gray-400">Houses</div>
                <div class="text-gray-600 dark:text-gray-400">Commercial Properties</div>
                <div class="text-gray-600 dark:text-gray-400">Land</div>
                <div class="text-gray-600 dark:text-gray-400">Vacation Rentals</div>
                <div class="text-gray-600 dark:text-gray-400">Real Estate Services</div>
                <div class="text-gray-600 dark:text-gray-400">Property Management</div>
                <div class="text-gray-600 dark:text-gray-400">Real Estate Investment</div>
            </div>
            <div x-show="selectedCategory === 'jobs'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Full-Time Jobs</div>
                <div class="text-gray-600 dark:text-gray-400">Part-Time Jobs</div>
                <div class="text-gray-600 dark:text-gray-400">Freelance Work</div>
                <div class="text-gray-600 dark:text-gray-400">Remote Jobs</div>
                <div class="text-gray-600 dark:text-gray-400">Temporary Jobs</div>
                <div class="text-gray-600 dark:text-gray-400">Job Services</div>
                <div class="text-gray-600 dark:text-gray-400">Career Advice</div>
                <div class="text-gray-600 dark:text-gray-400">Job Training</div>
            </div>
            <div x-show="selectedCategory === 'electronics'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Mobile Phones</div>
                <div class="text-gray-600 dark:text-gray-400">Laptops</div>
                <div class="text-gray-600 dark:text-gray-400">Tablets</div>
                <div class="text-gray-600 dark:text-gray-400">Cameras</div>
                <div class="text-gray-600 dark:text-gray-400">Audio Equipment</div>
                <div class="text-gray-600 dark:text-gray-400">TVs</div>
                <div class="text-gray-600 dark:text-gray-400">Smart Home Devices</div>
                <div class="text-gray-600 dark:text-gray-400">Gaming Consoles</div>
            </div>
            <div x-show="selectedCategory === 'construction'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Building Materials</div>
                <div class="text-gray-600 dark:text-gray-400">Construction Equipment</div>
                <div class="text-gray-600 dark:text-gray-400">Construction Services</div>
                <div class="text-gray-600 dark:text-gray-400">Architectural Design</div>
                <div class="text-gray-600 dark:text-gray-400">Home Renovation</div>
                <div class="text-gray-600 dark:text-gray-400">Plumbing Services</div>
                <div class="text-gray-600 dark:text-gray-400">Electrical Services</div>
                <div class="text-gray-600 dark:text-gray-400">Landscaping</div>
            </div>
            <div x-show="selectedCategory === 'production'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Manufacturing Equipment</div>
                <div class="text-gray-600 dark:text-gray-400">Production Services</div>
                <div class="text-gray-600 dark:text-gray-400">Industrial Supplies</div>
                <div class="text-gray-600 dark:text-gray-400">Quality Control</div>
                <div class="text-gray-600 dark:text-gray-400">Packaging Solutions</div>
                <div class="text-gray-600 dark:text-gray-400">Logistics</div>
                <div class="text-gray-600 dark:text-gray-400">Supply Chain Management</div>
                <div class="text-gray-600 dark:text-gray-400">Custom Manufacturing</div>
            </div>
            <!-- Subcategories for Lower Categories -->
            <div x-show="selectedCategory === 'agriculture'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Farming Equipment</div>
                <div class="text-gray-600 dark:text-gray-400">Seeds and Plants</div>
                <div class="text-gray-600 dark:text-gray-400">Livestock</div>
                <div class="text-gray-600 dark:text-gray-400">Agricultural Services</div>
                <div class="text-gray-600 dark:text-gray-400">Organic Farming</div>
                <div class="text-gray-600 dark:text-gray-400">Irrigation Systems</div>
                <div class="text-gray-600 dark:text-gray-400">Greenhouses</div>
                <div class="text-gray-600 dark:text-gray-400">Farm Supplies</div>
            </div>
            <div x-show="selectedCategory === 'household'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Furniture</div>
                <div class="text-gray-600 dark:text-gray-400">Kitchenware</div>
                <div class="text-gray-600 dark:text-gray-400">Home Decor</div>
                <div class="text-gray-600 dark:text-gray-400">Cleaning Supplies</div>
                <div class="text-gray-600 dark:text-gray-400">Storage Solutions</div>
                <div class="text-gray-600 dark:text-gray-400">Bedding</div>
                <div class="text-gray-600 dark:text-gray-400">Lighting</div>
                <div class="text-gray-600 dark:text-gray-400">Home Appliances</div>
            </div>
            <div x-show="selectedCategory === 'child'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Toys</div>
                <div class="text-gray-600 dark:text-gray-400">Baby Care</div>
                <div class="text-gray-600 dark:text-gray-400">Children's Clothing</div>
                <div class="text-gray-600 dark:text-gray-400">Educational Toys</div>
                <div class="text-gray-600 dark:text-gray-400">Strollers</div>
                <div class="text-gray-600 dark:text-gray-400">Baby Food</div>
                <div class="text-gray-600 dark:text-gray-400">Nursery Furniture</div>
                <div class="text-gray-600 dark:text-gray-400">Child Safety</div>
            </div>
            <div x-show="selectedCategory === 'clothes'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Men's Clothing</div>
                <div class="text-gray-600 dark:text-gray-400">Women's Clothing</div>
                <div class="text-gray-600 dark:text-gray-400">Shoes</div>
                <div class="text-gray-600 dark:text-gray-400">Accessories</div>
                <div class="text-gray-600 dark:text-gray-400">Sportswear</div>
                <div class="text-gray-600 dark:text-gray-400">Formal Wear</div>
                <div class="text-gray-600 dark:text-gray-400">Casual Wear</div>
                <div class="text-gray-600 dark:text-gray-400">Seasonal Wear</div>
            </div>
            <div x-show="selectedCategory === 'animals'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Pets</div>
                <div class="text-gray-600 dark:text-gray-400">Pet Supplies</div>
                <div class="text-gray-600 dark:text-gray-400">Animal Care</div>
                <div class="text-gray-600 dark:text-gray-400">Pet Food</div>
                <div class="text-gray-600 dark:text-gray-400">Veterinary Services</div>
                <div class="text-gray-600 dark:text-gray-400">Pet Grooming</div>
                <div class="text-gray-600 dark:text-gray-400">Pet Training</div>
                <div class="text-gray-600 dark:text-gray-400">Pet Adoption</div>
            </div>
            <div x-show="selectedCategory === 'recreation'" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="text-gray-600 dark:text-gray-400">Sports Equipment</div>
                <div class="text-gray-600 dark:text-gray-400">Books</div>
                <div class="text-gray-600 dark:text-gray-400">Art Supplies</div>
                <div class="text-gray-600 dark:text-gray-400">Musical Instruments</div>
                <div class="text-gray-600 dark:text-gray-400">Tickets</div>
                <div class="text-gray-600 dark:text-gray-400">Hobbies</div>
                <div class="text-gray-600 dark:text-gray-400">Travel</div>
                <div class="text-gray-600 dark:text-gray-400">Cultural Events</div>
            </div>
        </div>

        <!-- Lower Categories -->
        <section class="mt-8">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
                <!-- Agriculture -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'agriculture'">
                    <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YWdyaWN1bHR1cmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Agriculture" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Agriculture</h3>
                    </div>
                </div>
                <!-- Household Goods -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'household'">
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG91c2Vob2xkJTIwZ29vZHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Household Goods" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Household Goods</h3>
                    </div>
                </div>
                <!-- Child's World -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'child'">
                <img src="https://images.unsplash.com/photo-1607457561901-e6ec3a6d16cf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2hpbGQlMjB3b3JsZHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Child's World" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Child's World</h3>
                    </div>
                </div>
                <!-- Clothes, Shoes, Accessories -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'clothes'">
                    <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2xvdGhlc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Clothes, Shoes, Accessories" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Clothes, Shoes, Accessories</h3>
                    </div>
                </div>
                <!-- Domestic Animals -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'animals'">
                    <img src="https://images.unsplash.com/photo-1450778869180-41d0601e046e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZG9tZXN0aWMlMjBhbmltYWxzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="Domestic Animals" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Domestic Animals</h3>
                    </div>
                </div>
                <!-- Recreation and Culture -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" @mouseover="selectedCategory = 'recreation'">
                    <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmVjcmVhdGlvbiUyMGFuZCUyMGN1bHR1cmV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Recreation and Culture" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Recreation and Culture</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Most Recent Ads Section -->
<section class="container mx-auto px-6 py-8">
    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Most Recent Ads</h2>
    <div class="space-y-6">
        <!-- Ad 1 -->
        <a href="ad3.html" class="block bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
    <div class="flex flex-col md:flex-row">
        <img src="https://images.unsplash.com/photo-1508946621775-9d59b75e074e?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Golden Retriever" class="w-full md:w-48 h-48 object-cover">
        <div class="p-4 flex-1">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Golden Retriever Puppy</h3>
            <p class="text-gray-600 dark:text-gray-400 mt-2">
                Purebred Golden Retriever, 10 weeks old, vaccinated & microchipped. Friendly, playful, and great with families. Ready for a new home!
            </p>
            <div class="mt-4 flex items-center justify-between">
                <span class="text-lg font-bold text-gray-800 dark:text-white">€800</span>
                <span class="text-sm text-gray-600 dark:text-gray-400">21.05.2023</span>
            </div>
        </div>
    </div>
</a>

        <!-- Ad 2 -->
        <a href="ad2.html" class="block bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
    <div class="flex flex-col md:flex-row">
        <img src="https://images.unsplash.com/flagged/photo-1553505192-acca7d4509be?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="BMW M4" class="w-full md:w-48 h-48 object-cover">
        <div class="p-4 flex-1">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">2014 BMW M4</h3>
            <p class="text-gray-600 dark:text-gray-400 mt-2">
                3.0L Twin-Turbo Inline-6, 425 HP, 6-speed manual / 7-speed DCT, RWD, 0-60 mph in ~4 sec. Well-maintained, great condition.
            </p>
            <div class="mt-4 flex items-center justify-between">
                <span class="text-lg font-bold text-gray-800 dark:text-white">€45,000</span>
                <span class="text-sm text-gray-600 dark:text-gray-400">21.05.2023</span>
            </div>
        </div>
    </div>
</a>

        <!-- Ad 3 -->
        <a href="ad4.html" class="block bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
    <div class="flex flex-col md:flex-row">
        <img src="https://nextwheelstyres.com/wp-content/uploads/2024/07/57-797.jpg" alt="BMW Wheels" class="w-full md:w-48 h-48 object-cover">
        <div class="p-4 flex-1">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">BMW 19" Alloy Wheels</h3>
            <p class="text-gray-600 dark:text-gray-400 mt-2">
                Set of 4 genuine BMW M-Sport 19" alloy wheels. Excellent condition, no major scratches. Fits multiple BMW models. 
            </p>
            <div class="mt-4 flex items-center justify-between">
                <span class="text-lg font-bold text-gray-800 dark:text-white">€1,200</span>
                <span class="text-sm text-gray-600 dark:text-gray-400">21.05.2023</span>
            </div>
        </div>
    </div>
</a>


        <!-- Ad 4 -->
        <a href="ad5.html" class="block bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
    <div class="flex flex-col md:flex-row">
        <img src="https://images.unsplash.com/photo-1695578130391-929bdfff85d8?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Smartphone" class="w-full md:w-48 h-48 object-cover">
        <div class="p-4 flex-1">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">iPhone 13 Pro - 256GB</h3>
            <p class="text-gray-600 dark:text-gray-400 mt-2">
                iPhone 13 Pro in excellent condition. 256GB storage, 6.1" Super Retina XDR display, A15 Bionic chip. No scratches, fully functional.
            </p>
            <div class="mt-4 flex items-center justify-between">
                <span class="text-lg font-bold text-gray-800 dark:text-white">€850</span>
                <span class="text-sm text-gray-600 dark:text-gray-400">21.05.2023</span>
            </div>
        </div>
    </div>
</a>

    </div>
</section>

    <footer class="bg-white dark:bg-gray-800 shadow mt-12">
        <div class="container mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">About Us</h3>
                    <p class="text-gray-600 dark:text-gray-400">MM Reklama is your go-to platform for buying and selling items, finding jobs, and discovering real estate opportunities.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="text-gray-600 dark:text-gray-400 hover:text-blue-600">Home</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600">Categories</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600">Post Ad</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600">Login</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600">Register</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="text-gray-600 dark:text-gray-400">Email: info@mmreklama.com</li>
                        <li class="text-gray-600 dark:text-gray-400">Phone: +371 1234 5678</li>
                        <li class="text-gray-600 dark:text-gray-400">Address: 123 Main St, Riga, Latvia</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-200 dark:border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-600 dark:text-gray-400">&copy; 2023 MM Reklama. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>