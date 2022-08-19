@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1 class="underline">
                Pizzas List
            </h1>
        </div>
        <div>
            @foreach($pizzas as $pizza)
              <div class="flex align-center order_item">
                  <img src="/img/pizza.png" alt="pizza">
                 <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }} </a></h4>
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
