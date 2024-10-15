@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

@include('layouts.loader')
@include('layouts.toast')



<button onclick="createData()" class="ml-2 text-gray-600 hover:text-gray-900">Added</button>

<div class="md:flex md:flex-wrap gap-6">


    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-teal-700 p-7 text-white rounded">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-teal-500 p-7 text-white rounded">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-500 p-7 text-white rounded">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>

    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-yellow-500 p-7 text-white rounded">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>

    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-green-500 p-7 text-white rounded">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-800 p-7 text-white rounded">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-800 p-7 text-white rounded">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


    <div class="mb-5 flex md:w-1/4 lg:w-1/4 bg-green-800 p-7 text-white rounded">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>

</div>


<div class="flex mt-20 mb-20">
    <div class="md:w-[50%]">
        <h2>Dashboard - Monthly Sales Overview</h2>
    </div>

    <div class="md:w-[50%]">
        <h2>Dashboard - Monthly Sales Overview</h2>
        <canvas id="salesChart"></canvas>
    </div>
</div>



<!-- <div class="dashboard">
        
    </div> -->


@endsection