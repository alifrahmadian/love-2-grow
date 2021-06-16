@extends('layouts.app')

@section('content')
    @if (Auth::user())
        <div class="container">
            <h1 class="text-center mt-5">Selamat Datang {{ Auth::user()->name }}</h1>
        </div>
    @else
        <h1 class="text-center mt-5">Account not found! Please login</h1>
    @endif



@endsection