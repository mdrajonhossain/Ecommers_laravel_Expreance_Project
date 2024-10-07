<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images.png') }}" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        Headereee
    </div>

    <div class="md:flex">
        <div class="bg-sky-900 text-white sidebar md:w-[250px] p-4 hidden md:block">
        <ul>
                <li class="p-2 cursor-pointer">
                    <a href="#">Dashboard</a>
                </li>
                <li class="p-2 cursor-pointer">
                    <a href="#">Profile</a>
                </li>
                <li class="p-2 cursor-pointer">
                    <div class="flex justify-between items-center submenu-toggle">
                        <a href="#">Settings</a>                        
                        <span class="arrow text-white">&#10148;</span>
                    </div>                    
                    <ul class="submenu hidden pl-6 mt-2 space-y-2">
                        <li><a href="#" class="block hover:bg-gray-600 p-2">General</a></li>
                        <li><a href="#" class="block hover:bg-gray-600 p-2">Privacy</a></li>
                        <li><a href="#" class="block hover:bg-gray-600 p-2">Notifications</a></li>
                    </ul>
                </li>

                <li class="p-2 cursor-pointer">
                    <div class="flex justify-between items-center submenu-toggle">
                        <a href="#">Settings</a>                        
                        <span class="arrow text-white">&#10148;</span>
                    </div>                    
                    <ul class="submenu hidden pl-6 mt-2 space-y-2">
                        <li><a href="#" class="block hover:bg-gray-600 p-2">General</a></li>
                        <li><a href="#" class="block hover:bg-gray-600 p-2">Privacy</a></li>
                        <li><a href="#" class="block hover:bg-gray-600 p-2">Notifications</a></li>
                    </ul>
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
        $(document).ready(function() {
            $('.submenu-toggle').on('click', function() {
                // Hide other open submenus and reset their arrows
                $('.submenu').not($(this).next('.submenu')).slideUp();
                $('.arrow').not($(this).find('.arrow')).html('&#10148;'); // Set others to right arrow (➤)
                
                // Toggle the clicked submenu
                $(this).next('.submenu').slideToggle();

                // Toggle the arrow between right (➤) and down (▼)
                let arrow = $(this).find('.arrow');
                if (arrow.html() === '➤') {
                    arrow.html('&#9660;'); // Down arrow (▼)
                } else {
                    arrow.html('&#10148;'); // Right arrow (➤)
                }
            });
        });
    </script>

</body>
</html>