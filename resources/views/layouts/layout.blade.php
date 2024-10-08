<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')   
</head>



<body>
    @include('layouts.header')
    <div class="md:flex">
        @include('layouts.Leftbar')
        <div class="flex-grow p-4 text-red-900">
            <div class="container mx-auto">
                @yield('content')
            </div>
        </div>
    </div>



</body>

</html>