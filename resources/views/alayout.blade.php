<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                    <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">                        
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-home"></i>
                            <a href="#" class="text-white">Dashboard</a>
                        </div>                        
                    </div>                    
                </li>


                <li class="p-2 cursor-pointer">
                    <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">                        
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-home"></i>
                            <a href="#" class="text-white">Catagory</a>
                        </div>                        
                        <span class="arrow text-white">&#10148;</span>
                    </div>                    
                    <ul class="submenu hidden pl-6 mt-2 space-y-2">
                        <li><a href="#" class="block hover:bg-[#0369a1] p-2">Catagory List</a></li>
                        <li><a href="#" class="block hover:bg-[#0369a1] p-2">Add Catagory</a></li>
                    </ul>
                </li>


                <li class="p-2 cursor-pointer">
                    <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">                        
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-home"></i>
                            <a href="#" class="text-white">Catagory</a>
                        </div>                        
                        <span class="arrow text-white">&#10148;</span>
                    </div>                    
                    <ul class="submenu hidden pl-6 mt-2 space-y-2">
                        <li><a href="#" class="block hover:bg-[#0369a1] p-2">Catagory List</a></li>
                        <li><a href="#" class="block hover:bg-[#0369a1] p-2">Add Catagory</a></li>
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
            $('.submenu').not($(this).next('.submenu')).slideUp();
            $('.arrow').not($(this).find('.arrow')).html('&#10148;');
            $(this).next('.submenu').slideToggle();
            let arrow = $(this).find('.arrow');
            if (arrow.html() === '➤') {
                arrow.html('&#9660;');
            } else {
                arrow.html('&#10148;');
            }
        });
    });
    </script>

</body>

</html>