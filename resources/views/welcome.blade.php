@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome to the Home Page</h1>
    <p>This is the content of the home page.</p>
         
    @include('layouts.loader')
    @include('layouts.toast')    

    <button onclick="createData()" class="ml-2 text-gray-600 hover:text-gray-900">Added</button>

@endsection

