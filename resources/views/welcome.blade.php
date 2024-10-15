@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

@include('layouts.loader')
@include('layouts.toast')



<button onclick="createData()" class="ml-2 text-gray-600 hover:text-gray-900">Added</button>

<div class="md:flex md:flex-wrap gap-6">


    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-400 p-7 text-white rounded cursor-pointer">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-400 p-7 text-white rounded cursor-pointer">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-400 p-7 text-white rounded cursor-pointer">
        <div class="flex-1 text-2x1"><i class="fa-brands fa-product-hunt text-2x1"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>

    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-400 p-7 text-white rounded cursor-pointer">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>

    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-400 p-7 text-white rounded cursor-pointer">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-400 p-7 text-white rounded cursor-pointer">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-400 p-7 text-white rounded cursor-pointer">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


   
    <div class="mb-5 md:mb-0 flex md:w-1/4 lg:w-1/4 bg-blue-400 p-7 text-white rounded cursor-pointer">
        <div class="flex-1"><i class="fa-solid fa-layer-group text-2xl"></i></div>
        <div class="flex-[4]">Product</div>
        <div class="flex-1">10</div>
    </div>


</div>




<div class="flex flex-wrap justify-between mt-20 mb-20 gap-10">
    <div class="w-full md:w-[30%]">
        <h2 class="text-lg font-semibold mb-4">Dashboard - Monthly Sales Overview</h2>
        <div class="relative">
            <canvas id="pieChart" class="w-full h-96"></canvas>
        </div>
    </div>

    <div class="w-full md:w-[60%]">
        <h2 class="text-lg font-semibold mb-4">Dashboard - Sales Data Overview</h2>
        <div class="relative">
            <canvas id="salesChart" class="w-full h-96"></canvas>
        </div>
    </div>
</div>


 


@endsection