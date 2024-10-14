@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
             
    @include('layouts.loader')
    @include('layouts.toast')    

    

    <button onclick="createData()" class="ml-2 text-gray-600 hover:text-gray-900">Added</button>


    <div class="dashboard">
        <h2>Dashboard - Monthly Sales Overview</h2>
        <canvas id="salesChart"></canvas>
    </div>
   

@endsection

