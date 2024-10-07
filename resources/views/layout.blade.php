<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    @vite('resources/css/app.css')
    <style>
        .rotate-60 {
            transform: rotate(30deg);
        }

        .sidebar {
            height: calc(100vh - 64px);
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="bg-sky-700 w-screen h-16 flex text-white">
        Header
    </div>

    <div class="md:flex">
        <div class="bg-sky-900 text-white sidebar md:w-[250px] p-4 hidden md:block">
            <ul class="menu">
                <li>
                    <a href="#" class="block px-4 py-3 hover:bg-teal-700">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-3 hover:bg-teal-700 flex justify-between items-center">
                        Categories
                        <span class="expand-btn transition-transform">&#9665;</span>
                    </a>
                    <ul class="submenu pl-6 hidden transition-transform">
                        <li><a href="#" class="block px-4 py-2 hover:bg-teal-700">Submenu 1</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-teal-700">Submenu 2</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-teal-700">Submenu 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="block px-4 py-3 hover:bg-teal-700 flex justify-between items-center">
                        Products
                        <span class="expand-btn transition-transform">&#9665;</span>
                    </a>
                    <ul class="submenu pl-6 hidden transition-transform">
                        <li><a href="#" class="block px-4 py-2 hover:bg-teal-700">Submenu 1</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-teal-700">Submenu 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="block px-4 py-3 hover:bg-teal-700">Menu 4</a>
                </li>
            </ul>
        </div>

        <div class="flex-grow p-4 text-red-900">
            <div class="container mx-auto">                
                @yield('content')                
            </div>
        </div>

    </div>

    <script>
        document.querySelectorAll('.menu > li > a').forEach(menu => {
            menu.addEventListener('click', function(e) {
                const submenu = this.nextElementSibling;
                const arrow = this.querySelector('.expand-btn');

                // Hide all other submenus
                document.querySelectorAll('.submenu').forEach(otherSubmenu => {
                    if (otherSubmenu !== submenu) {
                        otherSubmenu.classList.add('hidden');
                        otherSubmenu.previousElementSibling.querySelector('.expand-btn').classList
                            .remove('rotate-60');
                    }
                });

                if (submenu) {
                    e.preventDefault();
                    submenu.classList.toggle('hidden');
                    arrow.classList.toggle('rotate-60');
                }
            });
        });
    </script>

</body>
</html>