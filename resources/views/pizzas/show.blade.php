@extends('layouts.app')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 flex-column">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 flex-column">
                <h1>Ordered by {{  $pizza->name }}</h1>
                <p class="type">Type - {{ $pizza->type }}</p>
                <p class="base">Base - {{ $pizza->base }}</p>
                <p>Extra toppings:</p>
                <ul>
                    @foreach($pizza->toppings as $topping)
                        <li>{{ $topping }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="button">Complete Order</button>
                </form>
            </div>
            <a href="{{ route('pizzas.index') }}" class="back"><- Back to all pizzas</a>
        </div>
    </div>
@endsection
