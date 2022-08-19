@extends('layouts.layout')
@section('contents')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 flex flex-column align-center py-4">
                <img src="/img/pizza-house.png" alt="logo">
                <h1 class="uppercase">
                    The North's best pizzas
                </h1>
                <p class="mssg"> {{ session('mssg') }} </p>
                <a href="/pizzas/create" class="button">Order a pizza</a>
            </div>
        </div>
@endsection
