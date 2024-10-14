<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    
    <title>@yield('title')</title>
    @vite('resources/css/app.css')   
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>



<body>
    @include('layouts.header')
    <div class="md:flex">
        @include('layouts.Leftbar',  ['message' => 'Dashboard'])
        <div class="flex-grow p-4">
            <div class="container mx-auto">
                @yield('content')
            </div>
        </div>
    </div>


    <script src="{{ asset('js/api.js') }}"></script>    
</body>
</html>