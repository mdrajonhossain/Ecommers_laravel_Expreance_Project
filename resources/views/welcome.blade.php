@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
             
    @include('layouts.loader')
    @include('layouts.toast')    

    

    <button onclick="createData()" class="ml-2 text-gray-600 hover:text-gray-900">Added</button>

    <div class="flex flex-wrap gap-6">
    <div class="w-full md:w-1/4 lg:w-1/4 bg-green-500 p-7 text-white">Product 10</div>
    <div class="w-full md:w-1/4 lg:w-1/4 bg-blue-500 p-7 text-white">Item 2</div>
    <div class="w-full md:w-1/4 lg:w-1/4 bg-red-500 p-7 text-white">Item 3</div>
    <div class="w-full md:w-1/4 lg:w-1/4 bg-yellow-500 p-7 text-white">Item 4</div>
    <div class="w-full md:w-1/4 lg:w-1/4 bg-purple-500 p-7 text-white">Item 5</div>
    <div class="w-full md:w-1/4 lg:w-1/4 bg-orange-500 p-7 text-white">Item 6</div>
    <div class="w-full md:w-1/4 lg:w-1/4 bg-teal-500 p-7 text-white">Item 7</div>
</div>

    <!-- <div class="dashboard">
        <h2>Dashboard - Monthly Sales Overview</h2>
        <canvas id="salesChart"></canvas>
    </div> -->
   

@endsection

